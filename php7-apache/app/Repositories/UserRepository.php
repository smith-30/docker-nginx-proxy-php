<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\User;
use App\Criteria\UserCriteria;

class UserRepository extends BaseRepository
{
    /**
     * このリポジトリーで使うモデルのパスを返す
     * BaseRepository内で$this->app->make($this->model())
     * として渡される
     *
     * @return string
     */
    function model()
    {
        return User::class;
    }

    /**
     * defaultで使用するCriteriaがある場合は設定できる
     */
    public function boot(){
        $this->pushCriteria(UserCriteria::class);
    }

}