# -*- coding: utf-8 -*-
from django.shortcuts import render, redirect, get_object_or_404
from sipalki.forms import ContactForm

def index(request):
    form = ContactForm
    return render(
        request,
        'index.html',
        {'form':form}
    )
