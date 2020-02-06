<?php
use App\Model\Comments;
use App\User;
use App\Roles;
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

Route::get('/session','PostController@index');




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
Route::resource('/post', 'PostController');
