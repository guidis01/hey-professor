<?php

test('avoid dd, dump')
    ->expect(['dd', 'dump'])
    ->not->toBeUsed();
