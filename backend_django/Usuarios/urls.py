from django.urls import path
from .views import index, user_modific, test
urlpatterns = [
    path('index/', index),
    path('user/', user_modific),
    path('test/', test),
]
