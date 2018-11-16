<?php

class View {

    public function render($tasks) {
	foreach ($tasks as $id => $task) {
            echo '<p>'.$task['id'].'.'.$task['name'].'</p>';
        }
    }
}