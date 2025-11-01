<?php

namespace App\Traits;

trait CommentTrait
{
    public bool $addCommentForm = false;
    public bool $editCommentForm = false;
    public $comment;

    public function updatedEditCommentForm()
    {
        if ($this->editCommentForm) {
            $this->comment = $this->task->comment ? $this->task->comment->text : '';
        }
    }

    public function addComment()
    {
        $this->validate([
            'comment' => 'required|string'
        ]);
        $this->task->setComment($this->comment);
        $this->reset('comment');
        $this->task->refresh();
        return $this->addCommentForm = false;
    }

    public function updateComment()
    {
        $this->validate([
            'comment' => 'required|string'
        ]);
        $this->task->setComment($this->comment);
        $this->reset('comment');
        $this->task->refresh();
        return $this->editCommentForm = false;
    }
}
