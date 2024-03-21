<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

<<<<<<< HEAD
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
=======
Broadcast::channel('App.Models.User.{id}', function ($users, $id) {
    return (int) $users->id === (int) $id;
>>>>>>> 38dd40ec4813f0e29cd7572812b3f23c9476c033
});
