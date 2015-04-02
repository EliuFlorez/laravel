<?php


namespace App\Services\Posts;

/**
 * Description of PostsService
 *
 * @author jfonseca
 */
class PostsService {
    
    private $model;
    
    public function __construct(PostModel $model)
    {
        $this->model = $model;
    }
    
    public function createPost(array $data){
        return $this->model->create($data);
    }
    
    public function getMonthlyPosts($month){
        $initDate = date('Y').'-'.$month.'-'.date('01');
        $endDate = date('Y').'-'.$month.'-'.date('31');
        return $this->model->where('published_at', '>=', $initDate)->where('published_at', '<=', $endDate)->take(10);
    }
    
}
