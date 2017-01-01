<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\UserRepository;
use App\Criteria\UserCriteria;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batchtest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    /** @var UserRepository */
    private $userRepository;

    /**
     * TestCommand constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();
        $this->userRepository = $userRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->userRepository->pushCriteria(UserCriteria::class);
        dd($this->userRepository->all());


////全データを取得
//$this->userRepository->all();
//
////idで検索
//$this->userRepository->find($id);
//
///**
// * リレーション先のモデルを指定して取得
// * Userモデルにpost()でリレーションが定義されている前提
// */
//$this->userRepository->with(['post'])->find($id);
//
////フィールド名を指定してデータを取得
//$this->userRepository->findByField('name', 'root');
//
////複数条件を指定してデータを取得
//$this->userRepository->findWhere([
//    //Default Condition =
//    'name' => 'root',
//    //Custom Condition
//    ['created_at', '>', '2016-01-01 00:00:00']
//]);
//
////１つのフィールドに対し、複数の値から検索
//$this->userRepository->findWhereIn('id', [1, 2, 3, 4]);
//
//// 上記の逆も用意されている
//$this->userRepository->findWhereNotIn('id', [6, 7, 8, 9]);
//
///**
// * 条件をクロージャでも渡せる
// *
// * 各メソッドにて$this->applyScope()が呼ばれていて
// * そこで指定した条件は追加される
// */
//$this->userRepository->scopeQuery(function($query){
//    return $query->orderBy('updated_at', 'asc');
//})->all();
//
///**
// * 一件取得
// * ただ、これは引数に条件は渡せないので、scopeQueryや
// * 後述のCriteriaを使う前提での実装
// */
//$this->userRepository->first($columns);
//
///**
// * create, update, deleteも実装されている(ラッパーみたいな感じ)
// */
//$this->userRepository->create(Input::all());
//$this->userRepository->update(Input::all(), $id);
//$this->userRepository->delete($id);
    }
}
