<?php
use App\Model\Comments;
use App\User;
use App\Roles;
use App\Models\Posts;
use App\Models\Photos;
use App\Models\Videos;
use App\Models\Tags;
use App\Models\Taggables;

use Carbon\Carbon;
use Egulias\EmailValidator\Exception\UnopenedComment;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/all', function () {
    return User::Where('id','<',10)->firstorfail();
});

Route::get('/users/insert', function () {

    $user=new User();
    $user->name='ali';
    $user->email='alia@local.com';
    $user->password='1234#dfgj';
    $user->save();


    return User::Where('id','<',10)->firstorfail();
});

Route::get('/users/insert2', function () {


    User::create([
        'name'=>'hasan2',
        'email'=>'hasan2@local.com',
        'password'=>'adsd@334',
    ]);

});

Route::get('/users/update/{id}', function ($id) {

    $user= User::find($id);
    $user->name="akbar";
    $user->email="akbar@localhost.com";
    $user->save();


});
Route::get('/users/update2/{id}', function ($id) {

    User::where('id',$id)->update([
        'name'=>'hasan',
        'email'=>'hasan123@local.com',
        'password'=>'adsd@334',
    ]);

});

Route::get('/comments/insert', function () {

    Comments::create([
        'commenttext'=>'hasan text comments',
        'user_id'=>'7',
    ]);

});


Route::get('/users/delete/{id}', function ($id) {

    $user=User::find($id);
    $user->delete();

});

Route::get('/users/delete2/{id}', function ($id) {

    User::destroy($id);

});
Route::get('/users/delete3/{id}', function ($id) {

    User::where('id',$id)->delete();

});

Route::get('/users/softdelete/{id}', function ($id) {

    User::where('id',$id)->delete();

});

Route::get('/comments/softdelete/{id}', function ($id) {

    Comments::where('id',$id)->delete();

});

Route::get('/comments/softdeletetrash/all', function () {


  return comments::onlyTrashed()->get();

});

Route::get('/comments/softdeleteforcedeletet', function () {

            $comment=Comments::where('id',5);
    return $comment->ForceDelete();

  });




Route::get('/user/{id}/comments', function ($id) {

    // return User::find($id);
    return User::find($id)->comments;

});



Route::get('/comments/user',['middleware'=>['Role'], function () {

    $comments=Comments::all();
   foreach($comments as $commnet){
     echo $commnet->commenttext."<br>";
   }

}]);


Route::get('/user/{id}/roles', function ($id) {

    $User=User::find($id);
    return $User->roles()->get();
//    foreach($User->roles() as $role){
//      echo $role;
//    }

});

Route::get('/user/roles/attach', function () {

   $user= User::find(8);
   $role= Roles::find(1);
       $user->Roles()->attach($role->id,['created_at'=>'2020-02-05 00:00:00']);

});
Route::get('/user/roles/detach', function () {

    $user= User::find(8);

    $role= Roles::find(1);

      $user->Roles()->detach($role->id);

 });

// Route::get('/user/role', 'Usercontroller@index');


Route::get('/user/role', ['middleware'=>['Role'],function () {

    echo "<br>route in running";

}]);

//Sessions

Route::get('/session','CommentsController@index');




//create comment with user (one to many)
Route::get('/user/{id}/commentcreate', function ($id) {

    $user=User::findOrFail($id);
    $comment=new Comments(['commenttext'=>"hello I am 7 User"]);
    $user->comments()->save($comment);
    return "save comments successfull";

});

//read comment with user
Route::get('/user/{id}/commentread', function ($id) {
    $user=User::findOrFail($id);
    foreach($user->comments as $comment){
        echo $user->name." said :  ".$comment->commenttext."<br>";
    }
});

//update comment with user
Route::get('/user/{id}/commentupdate', function ($id) {
    $user=User::findOrFail($id);
    $user->comments()->whereId(10)->update(['commenttext'=>'update text end']);
    return "your record updated ";
});

//delete comment with user all

Route::get('/user/{id}/commentdelete', function ($id) {
    $user=User::findOrFail($id);
    $user->comments()->whereId(9)->delete();
    return "your record deleted ";
});

//create role with user
Route::get('/user/{id}/rolecreate', function ($id) {
    $user=User::findOrFail($id);
    $role=Roles::findOrFail(2);
    $user->roles()->save($role);
    return "save role successfull";
});

//read role with user
Route::get('/user/{id}/roleread', function ($id) {
    $user=User::findOrFail($id);
    foreach($user->roles as $role){
        echo $role->name."<br>";
    }
});
//update role with user many to many
Route::get('/user/{id}/rolesync', function ($id) {
    $user= User::find($id);
       $user->Roles()->sync([3,1]);
       return "sync role successfull";

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/commentsitem', 'CommentsController');

// date
Route::get('/date',function(){

    $date=new DateTime("+1 year");
    return $date->format('d-m-y h:i:m');
});

Route::get('/carbon',function(){

    // $carbon=Carbon::now()->addDay(+2);
    // return $carbon->diffForHumans();
    //  $carbon=Carbon::now()->addMonth(-10);
    // $carbon=Carbon::now()->addYear(-10);
     //$carbon=Carbon::now()->subMonth(1);
    //   $carbon=Carbon::now()->Yesterday();
    $carbon=Carbon::now()->Tomorrow();
    return $carbon;
});

Route::get('/attributes',function(){

    $comment= Comments::findOrFail(2);
    return $comment->commenttext;
});

//polymorphic

Route::get('/user/{id}/photos',function($id){

    $user=User::findOrFail($id);
    $photos=$user->photos()->get();

    foreach($photos as $photo){
       echo  $photo->path."<br>";
    }
});

Route::get('/posts/{id}/photos',function($id){

    $post=Posts::findOrFail($id);
    $photos=$post->photos()->get();

    foreach($photos as $photo){
       echo  $photo->path."<br>";
    }
});

Route::get('/photos/{id}/belongto',function($id){

    $photo=Photos::findOrFail($id);
   return $image=$photo->imageable()->get();


});
//Polymorphic Many to Many
Route::get('/post/{id}/tags',function($id){

    $post=Posts::findOrFail($id);

    $tags=$post->tags;
    echo $post->title. '<br> tags is : ';

    foreach($tags as $tag){
        echo $tag->name."<br>";
    }

});

Route::get('/video/{id}/tags',function($id){

    $video=Videos::findOrFail($id);

    $tags=$video->tags;
   echo "video name".$video->name."<br>";
    foreach($tags as $tag){
        echo '  tags is : '. $tag->name."<br>";
    }

});

Route::get('/tag/{id}/videos',function($id){

    $tags=Tags::findOrFail($id);

    $videos=$tags->videos;

   echo "tag name : ".$tags->name."<br>";
    foreach($videos as $video){
        echo '  video is : '. $video->name."<br>";
    }

});


//CRUD Polymorphics

Route::get('/create/postphoto/{id}',function($id){

    $posts= Posts::findOrFail($id);
    if($posts->photos()->create([
        'path'=>'phototest3.png'
    ])){
        echo "Your create photo successfully";
    }else{
        echo "Your create photo NOT successfully";
    }

});
//Insert
Route::get('/create/userphoto/{id}',function($id){

    $user= User::findOrFail($id);
    if($user->photos()->create([
        'path'=>'phototest14.png'
    ])){
        echo "Your create photo successfully";
    }else{
        echo "Your create photo NOT successfully";
    }

});
//Update
Route::get('/update/postphoto/{id}',function($id){

    $post= Posts::findOrFail($id);
    $photo=$post->photos()->whereId(12)->first();
    $photo->path="updated.jpg";
    if($photo->save()){
        echo "Your Update photo successfully";
    }else{
        echo "Your Update photo NOT successfully";
    }

});

//Delete
Route::get('/delete/postphoto/{id}',function($id){

    $post= Posts::findOrFail($id);
    $photo=$post->photos()->whereId(12)->first();

    if($photo->delete()){
        echo "Your  photo Deleted successfully";
    }else{
        echo "Your  photo NOT Deleted successfully";
    }

});

//Read
Route::get('/read/postphoto/{id}',function($id){

    $post= Posts::findOrFail($id);
    $photos=$post->photos()->get();

    foreach($photos as $photo){
      echo "photo : ".$photo->path."<br>";
    }

});

//Deassign
Route::get('/deassign/photo',function(){

    $photo= Photos::findOrFail(13);
    $photo->imaggable_id=0;
    $photo->imaggable_type="";
    if($photo->save())
    return "true";
});

// Polymorphic Many to Many

//Create (Insert)
Route::get('/create/tag/post',function(){

    $posts= Posts::create(['title'=>"many to many create2",'content'=>"test post many to many plymorphic2"]);
    $tag=Tags::findOrFail(3);

    if($posts->tags()->save($tag))
    return "true";
});

//Read

Route::get('/read/tag/post',function(){

    $posts= Posts::findOrFail(1);
    foreach($posts->tags as $tag){
    echo $tag->name."<br>";
    }

});

//   email
//Read

Route::get('/sendmail',function(){

   $data=[
       'title'=>'hello I am admin',
       'content'=>"test command and text for send mail.... programmersho.com"
   ];
   Mail::send('emails.email', $data, function ($message) {
       $message->from('alij.work@programmersho.com', 'ali jannati');
       $message->sender('john@johndoe.com', 'John Doe');
       $message->to('sadeghj.work@gmail.com', 'sadegh jannati');
      // $message->cc('john@johndoe.com', 'John Doe');
     //  $message->bcc('john@johndoe.com', 'John Doe');
      // $message->replyTo('john@johndoe.com', 'John Doe');
       $message->subject('hello1');
      // $message->priority(3);
      // $message->attach('pathToFile');
   });
   echo "your email send successfully";

});

