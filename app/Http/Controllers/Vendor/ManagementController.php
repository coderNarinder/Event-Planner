<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Vendor\VendorController;
use App\VendorCategory;
use App\VendorCategoryMetaData;
use App\Category;
use Auth;
class ManagementController extends VendorController
{
   
public $restrictions =[
                'imageGallery',
                'videoGallery'
 ];

   #-----------------------------------------------------------------
   #    construct
   #-----------------------------------------------------------------
  
   public function getData($slug)
   {
   	  
      $category = Category::where('slug',$slug)
                           ->join('vendor_categories','vendor_categories.category_id','=','categories.id')
                           ->where('vendor_categories.user_id',Auth::user()->id);


      return $category->count() > 0 ? $category->first() : redirect()->route('vendor_dashboard')->with('messages','Please check your url, Its wrong!');

   	   
   }


   #-----------------------------------------------------------------
   #    index
   #-----------------------------------------------------------------
  
   public function about($slug)
   {

      $category = $this->getData($slug);
      return view('vendors.management.about')
   	  ->with('slug',$slug)
   	  ->with('title',$category->label.'::About');
   }

   #-----------------------------------------------------------------
   #    images
   #-----------------------------------------------------------------
  
   public function images($slug)
   {

 
   	  $category = $this->getData($slug);
   	  $images = VendorCategoryMetaData::where('category_id',$category->id)
   	                                  ->where('user_id',Auth::user()->id)
   	                                  ->where('type','imageGallery')
   	                                  ->paginate(12);
      return view('vendors.management.images.index')
   	  ->with('slug',$slug)
   	  ->with('category',$category)
   	  ->with('images',$images)
   	  ->with('title',$category->label.' Management :: About');
   }

   #-----------------------------------------------------------------
   #    images
   #-----------------------------------------------------------------



public function upload(Request $request)
{
         if($request->hasFile('gallery_image')){

                  # save images
            $imageLink = array();
            $delink = array();



               foreach ($request->gallery_image as $key) {
                

                        # upload image one by one
                           $image_name = uploadFileWithAjax('images/vendors/gallery/',$key);

                           $d=new VendorCategoryMetaData;
                           $d->key = 'aboutus_slider_images';
                           $d->keyValue = $image_name;
                           $d->user_id = Auth::user()->id;
                           $d->category_id = $request->category_id;
                           $d->type = 'imageGallery';
                           $d->save();
                                   
                                 $del = array(
                                      'caption' => 'product_image',
                                      'url'     =>  url('/'),
                                      'key'     => $d->id
                                );
                                array_push($imageLink, url($image_name));

                                array_push($delink, $del);
              
               }
               
         } 

              $json = array(
                            'initialPreview' => $imageLink,
                            'initialPreviewAsData' => true,
                            'initialPreviewConfig' => $delink,
             );

             return response()->json($json); 

}



#-------------------------------------------------------------------------------------------
#  videos view
#-------------------------------------------------------------------------------------------





public function videos($slug)
{
	  $category = $this->getData($slug);
   	 $videos = VendorCategoryMetaData::where('category_id',$category->id)
   	                                  ->where('user_id',Auth::user()->id)
   	                                  ->where('type','videoGallery')
   	                                  ->paginate(8);
      return view('vendors.management.videos.index')
   	  ->with('slug',$slug)
   	  ->with('category',$category)
   	  ->with('videos',$videos)
   	  ->with('title',$category->label.' Management :: About');
}


#-------------------------------------------------------------------------------------------
#  videos add
#-------------------------------------------------------------------------------------------





public function addVideos($slug)
{
	  $category = $this->getData($slug);
   	  
      return view('vendors.management.videos.add')
   	  ->with('slug',$slug)
   	  ->with('category',$category)
   	   
   	  ->with('title',$category->label.' Management :: About');
}



#-------------------------------------------------------------------------------------------
#  videos saveVideos
#-------------------------------------------------------------------------------------------





public function saveVideos(Request $request,$slug)
{

	$this->validate($request,[
           'title' => 'required',
           'video_link' => 'required'
	]);
	      $category = $this->getData($slug);
    
     
                           $data = ['title' => $request->title,'link' => $request->video_link];

                           $d=new VendorCategoryMetaData;
                           $d->key = 'video';
                           $d->keyValue = json_encode($data);
                           $d->user_id = Auth::user()->id;
                           $d->category_id = $category->id;
                           $d->type = 'videoGallery';
                           $d->save();


   return redirect()->route('vendor_category_videos_management',$slug)->with('messages','Video is saved in your gallery.');
   	  
}


#-------------------------------------------------------------------------------------------
#  Delete Meta Tags
#-------------------------------------------------------------------------------------------



public function delete($slug,$id)
{
	 $category = $this->getData($slug);
     
     $v = VendorCategoryMetaData::where('id',$id)->where('user_id',Auth::user()->id)->whereIn('type',$this->restrictions)->first();

     if(empty($v)){
         return redirect()->back()->with('error_message','Something wrong!');
     }

             // $file_path =  public_path().'/'.$m->value;
             // if (file_exists( $file_path ) && $m->value != "") {

             //        unlink($file_path); 

             //   } 

    $v->delete();

return redirect()->back()->with('error_message','Deleted!');

}






  }
