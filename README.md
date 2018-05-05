# PHP version:

7.1.7

# Package affected:	

Class/Object related

# Bug Type:	

Bug

# Operating system:	

Linux / MacOS

# Summary:	

Object cast as array 7.1.2 v 7.2.5

# Description

Ive encountered some notable differences in behaviour between PHP versions 7.1 and 7.2 on MacOS, Centos, and also with Docker base images for PHP php:7.2-cli and php:7.1-cli

Seems to happen when accessing a basic object cast to and array directly. Although its a pseudo code approach I wouldnt expect such a difference between vesions.

Ive also included a workaround which I have used to backfix in 7.1

# Expected Result

I would expect the given code to exhibit the same behaviour across versions. I believe that the behaviour exhibited by PHP 7.2 to be correct.

# Actual result

Difference in behaviour between PHP versions 7.1 and 7.2
