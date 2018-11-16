<?php

class View {

    public function render($tasks) {
	foreach ($tasks as $id => $task) {
            echo '<p>'.$id.'->'.$task.'</p>';
        }
    }
}