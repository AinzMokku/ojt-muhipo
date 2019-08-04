<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summernote;

class SummernotefileController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     */

    public function getSummernoteeditor()
    {
        return view('summernoteeditor');
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function postSummernoteeditor(Request $request)
    {
        
        if($request->get('id')==""){
            $this->validate($request,[
                'detail'  => 'required',
                'feature' => 'required',
            ]);

            $detail=$request->input('detail');
            $feature=$request->input('feature');

            $dom = new \DomDocument();

            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            
            $image = $dom->getElementsByTagName('img');

            foreach($image as $k => $img){
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= "/upload/" . time().$k.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }

            $detail = $dom->saveHTML();
            $summernote = new Summernote;
            $summernote->content = $detail;
            $summernote->Feature = $feature;
            $summernote->save();

        } else {
            $this->validate($request,[
                'detail'  => 'required',
                'feature' => 'required',
            ]);

            $detail=$request->input('detail');
            $feature=$request->input('feature');

            $dom = new \DomDocument();

            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            
            $image = $dom->getElementsByTagName('img');

            foreach($image as $k => $img){
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= "/upload/" . time().$k.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }

            $detail = $dom->saveHTML();
            $summernote = Summernote::where('id',$request->get('id'));
            $summernote->update([    
                'content' => $detail,
                'Feature' => $feature,
            ]);

        }

        return redirect('/data_pengumuman');
    }
}
