<?php

namespace Project\Domain\Blog;

class BlogRepository extends \Project\Repository
{
    
    public function test1()
    {
        //return $this->db()->setting('connection/username');
    }
    
    public function add()
    {
        $post = ['title' => 'Title', 'content' => 'Content'];
        $this->db()->insert('blog_posts', $post);
        return $this->db()->lastInsertId();
    }
    
    public function replace()
    {
        $post = ['id' => '13', 'title' => 'Title replace', 'content' => 'Content replace'];
        $this->db()->replace('blog_posts', $post);
        return $this->db()->affectedRows();
    }
    
    public function addMultiple()
    {
        $posts = [
          ['title' => 'Title1', 'content' => 'Content1'],
          ['title' => 'Title2', 'content' => 'Content2'],
          ['title' => 'Title3', 'content' => 'Content3'],
          ['title' => 'Title4', 'content' => 'Content4'],
          ['title' => 'Title5', 'content' => 'Content5'],
        ];
        $this->db()->insert('blog_posts', $posts);
        /**
         * Last insert id not reliable on multiple inserts
         */
        return $this->db()->affectedRows();
    }
    
    public function delete($id)
    {
        $this->db()->executeQuery("DELETE FROM blog_posts WHERE id = ?", [$id]);
        return $this->db()->affectedRows();
    }
    
    public function clear()
    {
        $this->db()->executeQuery("TRUNCATE TABLE blog_posts");
        return $this->db()->affectedRows();
    }
    
    public function transaction()
    {
        $post = ['title' => 'Title', 'content' => 'Content'];
        $post1 = ['title' => 'Title1', 'content' => 'Content1'];
        $post2 = ['title' => 'Title2', 'content' => 'Content2'];
        $post3 = ['title' => 'Title3', 'content' => 'Content3'];
        $this->db()->executeTransaction(
            [
                ["TRUNCATE TABLE blog_posts", null],
                ["INSERT INTO blog_posts (title, content) VALUES (?, ?)" , $post1],
                ["INSERT INTO blog_posts (title, content) VALUES (?, ?)" , $post2],
                ["INSERT INTO blog_posts (title, content) VALUES (?, ?)" , $post3],
                ["INSERT INTO blog_posts (title, content) VALUES (?, ?)" , $post],
                ["INSERT INTO blog_posts (title, content) VALUES (?, ?)" , $post],
                ["INSERT INTO blog_posts (title, content) VALUES (?, ?)" , $post],
                ["INSERT INTO blog_posts (title, content) VALUES (?, ?)" , $post],
                ["DELETE FROM blog_posts WHERE id = ?", [6]],
                ["INSERT INTO blog_posts (title, content) VALUES (?, ?)" , $post],
            ]
        );
        return $this->db()->lastInsertId();
    }
    
    public function getAll()
    {
        return $this->db()->getRows("SELECT id, title, content FROM blog_posts WHERE 1");
    }
    
    public function countAll()
    {
        $this->db()->getRows("SELECT id, title, content FROM blog_posts WHERE 1");
        //return $this->db()->numRows();
    }
    
    public function getOne()
    {
        return $this->db()->getRow("SELECT id, title, content FROM blog_posts WHERE id = ? LIMIT 1", [3]);
    }
    
    public function getTitle()
    {
        return $this->db()->getColumn("SELECT title FROM blog_posts WHERE id = ? LIMIT 1", [3]);
    }
    
    public function getSome()
    {
        $ids = [1,2,3];
        $sqlIn = $in  = str_repeat('?,', count($ids) - 1) . '?';
        $query = "SELECT title, content FROM blog_posts WHERE id IN({$sqlIn})";
        return $this->db()->getRows($query, $ids);
    }
    
    public function update()
    {
        $this->db()->executeQuery("UPDATE blog_posts SET content = ? WHERE id = ?", ['Modified content', 5]);
        return $this->db()->affectedRows();
    }
    
    public function test2()
    {
        //return $this->anotherDb()->setting('connection/username');
    }
    
    public function test3()
    {
        //return $this->db2()->setting('connection/username');
    }
    
    public function getLatest()
    {
        //XXX
        //return $this->db()->retrieve($stuff, $table, $conditions);
    }
}
