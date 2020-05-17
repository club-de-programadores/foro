from django.db import models
from django.contrib.auth.models import AbstractUser

# Create your models here.

#Personalizando el sistema de usuario desde el inicio

class User(AbstractUser):

    # Tipo de usuario
    normal_user = models.BooleanField(default = True)
    executor_user = models.BooleanField(default= False) 
    vigilant_user = models.BooleanField(default= False)
    


