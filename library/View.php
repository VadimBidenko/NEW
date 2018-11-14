<?php

class View {

    public function render($tasks) {
	foreach ($tasks as $task) {
            echo '<p>'.$task.'</p>';
        }
    }
}