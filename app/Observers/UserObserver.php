<?php

namespace App\Observers;

use App\Notifications\UserInfoNotification;
use App\User;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
        $user->notify(new UserInfoNotification($user, '유저 생성'));
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
        $user->notify(new UserInfoNotification($user, '유저 수정'));
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
        $user->notify(new UserInfoNotification($user, '유저 삭제'));
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
        $user->notify(new UserInfoNotification($user, '유저 복원'));
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
        $user->notify(new UserInfoNotification($user, '유저 완전 삭제'));
    }
}
