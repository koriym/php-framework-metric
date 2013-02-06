# PHP framework metric


### How to run the script

    composer install
    git submodule update --init
    git submodule foreach 'git submodule update --init'
    cd bear
    php update.php
    cd ..
    php run.php

this script output software metrics charts of php frameworks in data folder. See more info about software metrics at http://pdepend.org/.
