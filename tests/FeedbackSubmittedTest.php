<?php namespace Tests;

class FeedbackSubmitted extends AttemptTestCase {
    protected function constructInput() {
        return array_merge(parent::constructInput(), [
            'eventname' => '\mod_feedback\event\response_submitted',
            'objecttable' => 'feedback_completed',
            'objectid' => 1,
        ]);
    }
}
