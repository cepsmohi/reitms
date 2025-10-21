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
        session()->flash('success', 'Comments added');
        return redirect()->route('tasks.rmsinstall.details', $this->task);
    }

    public function updateComment()
    {
        $this->validate([
            'comment' => 'required|string'
        ]);
        $this->task->setComment($this->comment);
        session()->flash('success', 'Comments updated');
        return redirect()->route('tasks.rmsinstall.details', $this->task);
    }
}
