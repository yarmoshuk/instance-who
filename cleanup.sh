#!/bin/sh

#removes instance specific files

echo "Start twine instance files cleanup utility"

rm assets/css/less/variables.less
rm -r assets/css/less/detemplates/*
rm -r assets/data/*
rm -r assets/detemplates/*
rm -r assets/icons/explore/*
rm -r assets/images/*
rm -r assets/maps/*
rm -r assets/public/*
rm app/templates/footer.php
rm app/templates/public.html
rm -r app/templates/explore/modals/*
rm -r app/templates/explore/popovers/*
rm api/application/config/dataentry.php
rm api/application/config/de_forms.php
rm api/application/config/exchange.php
rm api/application/config/notifications.php
rm api/application/config/review.php

echo "    grunt dev --instance=/var/www/twine_instances/instance-who"

echo "End twine instance files cleanup utility."
