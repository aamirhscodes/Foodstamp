<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Support\Facades\File;

class StampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stamps = Stamp::all();
        return view('Stamp.list', compact('stamps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Stamp.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $qrContent =  Str::uuid();

        // Generate the QR code and save it to the public folder
        $imageName = $qrContent . '-qrcode.png'; // Name of the file
        $imagePath = public_path($imageName); // Path to the public folder

        $renderer = new ImageRenderer(
            new RendererStyle(300), // Size of the QR code
            new SvgImageBackEnd()   // Backend to generate SVG format
        );

        // Initialize the Writer with the renderer
        $writer = new Writer($renderer);

        // Generate the QR code as a string
        $qrCodeImage = $writer->writeString($qrContent);

        // Define the path to save the QR code image
        $imageName = 'qrcode.png';
        $imagePath = public_path($imageName);

        // Save the QR code image to the public folder
        File::put($imagePath, $qrCodeImage);
        $stamp = new Stamp;
        $stamp->title = $request->title;
        $stamp->description = $request->description;
        $stamp->price = $request->price;
        $stamp->sales = 0;
        $stamp->usages = 0;
        $stamp->code = $qrContent;
        $stamp->qrpath = $imageName;
        $stamp->save();
        return redirect()->route('Stamp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stamp  $Stamp
     * @return \Illuminate\Http\Response
     */
    public function show(Stamp $Stamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stamp  $Stamp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $stamp = Stamp::find($id);
        return view('Stamp.edit', compact('stamp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stamp  $Stamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $stamp = Stamp::find($id);
        $stamp->title = $request->title;
        $stamp->description = $request->description;
        $stamp->price = $request->price;
        $stamp->save();
        return redirect()->route('Stamp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stamp  $Stamp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Stamp = Stamp::find($id);
        $Stamp->delete();
        return redirect()->route('Stamp.index');

    }
}
