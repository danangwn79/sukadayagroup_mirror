@echo off

REM Daftar tabel
set "tables=" REM tambahkan nama tabel lainnya di sini

REM Loop melalui setiap tabel dan buat file model
for %%t in (%tables%) do (
    set "model_name=%%t"
    set "model_name=%model_name:_= %"
    set "model_name=%model_name: =%"
    echo ^<?php > %%t_model.php
    echo. >> %%t_model.php
    echo class %%t_model extends MY_Model { >> %%t_model.php
    echo     protected $_table = '%%t'; >> %%t_model.php
    echo } >> %%t_model.php
)
