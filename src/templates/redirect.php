<?php
header('Location: '.$page->redirect_target());
exit("Failed to redirect to " . $page->redirect_target());
