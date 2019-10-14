<?php
if_get('/test', function ()
{
    return db_query('SHOW DATABASES');
});
