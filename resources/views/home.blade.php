<?php

echo 'Doctors';
echo '<br />';
echo link_to('/doctors/list', $title = 'list Doctors', $attributes = array(), $secure = null);
echo '<br />';
echo link_to('/doctors/form', $title = 'add a Doctor', $attributes = array(), $secure = null);
echo '<br />';
echo 'Pacients';
echo '<br />';
echo link_to('/pacients/list', $title = 'list Pacients', $attributes = array(), $secure = null);
echo '<br />';
echo link_to('/pacients/form', $title = 'add a Pacient', $attributes = array(), $secure = null);
echo '<br />';
echo 'Categories';
echo '<br />';
echo link_to('/categories/list', $title = 'list Categories', $attributes = array(), $secure = null);
echo '<br />';
echo link_to('/categories/form', $title = 'add a Category', $attributes = array(), $secure = null);
echo '<br />';
echo 'Questions';
echo '<br />';
echo link_to('/questions/list', $title = 'list questions', $attributes = array(), $secure = null);
echo '<br />';
echo link_to('/questions/form', $title = 'add a question', $attributes = array(), $secure = null);
echo '<br />';
echo 'Answers';
echo '<br />';
echo link_to('/answers/list', $title = 'list answers', $attributes = array(), $secure = null);
echo '<br />';
echo link_to('/answers/form', $title = 'add a answer', $attributes = array(), $secure = null);
