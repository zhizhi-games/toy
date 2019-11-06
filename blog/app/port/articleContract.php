<?php
namespace App\prot;

interface articleContract
{
	// 添加文章
	public function addArticle($request);

	// 修改文章
	public function editArticle($request);

	// 删除文章
	public function deleteArticle($Article_id);

	// 获取文章列表
	public function getArticle($limit, $page);

	// 获取文章详情
	public function getArticleDetiles($Article_id);


	// 文章分类添加
	public function addArticleType($request);

	// 文章分类修改
	public function editArticleType($request);	

	// 文章分类列表
	public function getArticleType($limit, $page);

	// 文章分类删除
	public function deleteArticleType($Article_Type_id);

}
