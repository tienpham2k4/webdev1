<?php
include("function.php");
session_destroy();
header("location: ".getUrl());