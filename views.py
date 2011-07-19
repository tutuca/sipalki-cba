# -*- coding: utf-8 -*-
from django.shortcuts import render, redirect, get_object_or_404

def index(request):
    render(
        request,
        'index.html',
        {}
    )
