<?php

namespace App\Traits;

trait CommentTrait
{
    public bool $addCommentForm = false;
    public bool $editCommentForm = false;
    public string $comment;

    public function openCommentForm()
    {
        $this->addCommentForm = true;
    }

    public function closeCommentForm()
    {
        return $this->addCommentForm = false;
    }

    public function addComment()
    {
        $this->validate([
            'comment' => 'required|string'
        ]);
        $this->task->setComment($this->comment);
        $this->reset('comment');
        return $this->addCommentForm = false;
    }

    public function closeEditCommentForm()
    {
        $this->editCommentForm = false;
    }

    public function openEditCommentForm()
    {
        $this->comment = $this->task->comment->text;
        $this->editCommentForm = true;
    }

    public function updateComment()
    {
        $this->validate([
            'comment' => 'required|string'
        ]);
        $this->task->setComment($this->comment);
        return $this->editCommentForm = false;
    }
}
