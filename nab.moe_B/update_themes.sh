#!/bin/sh
git submodule sync
git submodule update --init --recursive
git submodule foreach git checkout master
git submodule foreach git pull

