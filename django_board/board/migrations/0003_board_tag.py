# -*- coding: utf-8 -*-
# Generated by Django 1.9.13 on 2017-12-27 16:58
from __future__ import unicode_literals

from django.db import migrations
import tagging.fields


class Migration(migrations.Migration):

    dependencies = [
        ('board', '0002_auto_20171227_1341'),
    ]

    operations = [
        migrations.AddField(
            model_name='board',
            name='tag',
            field=tagging.fields.TagField(blank=True, max_length=255),
        ),
    ]
