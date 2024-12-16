# 📐 Clases de Formas en POO - Nivel 1

## 📄 Descripción  
Este proyecto implementa una jerarquía de clases en PHP que permite calcular el área de diferentes formas geométricas. 

### Ejercicio  
1. **Clase `Shape`**  
   - Definir la clase `Shape` con un constructor que reciba como parámetros el ancho y la altura.  
   - Definir el método abstracto `calculateArea()` que será implementado por las subclases.  

2. **Subclase `Triangle`**  
   - Crear la subclase `Triangle` que herede de `Shape` y calcule el área del triángulo utilizando el método `calculateArea()`.  

3. **Subclase `Rectangle`**  
   - Crear la subclase `Rectangle` que herede de `Shape` y calcule el área del rectángulo utilizando el método `calculateArea()`.  

4. **Prueba de las clases**  
   - Instanciar objetos de `Triangle` y `Rectangle`, y mostrar sus áreas calculadas.  

---

## 💻 Tecnologías Utilizadas  
- PHP v8.0 o superior  

---

## 📋 Requisitos  
- Entorno de ejecución PHP configurado (como XAMPP, WAMP o Laragon).  
- Editor de texto o IDE compatible con PHP (como VSCode o PHPStorm).  

---

## 🛠️ Instalación  

1. **Clona este repositorio**:  
   ```bash
   git clone <URL del repositorio>
   ```  
2. **Accede al directorio del proyecto**:  
   ```bash
   cd Shapes-Nivel1
   ```  
3. **Configura tu servidor local**:  
   - Coloca los archivos dentro de la carpeta de tu servidor local (ej.: `htdocs` si utilizas XAMPP).  

---

## ▶️ Ejecución  

1. Abre el archivo de prueba en tu servidor local, por ejemplo:  
   ```
   http://localhost/Shapes-Nivel1/index.php
   ```  
2. Observa cómo se instancian los objetos `Triangle` y `Rectangle` y se calcula el área para cada uno.  

---

## 🌐 Despliegue  

Este proyecto es solo un ejemplo de aprendizaje y no está diseñado para ser desplegado en producción.  

---

## 🤝 Contribuciones  

¡Las contribuciones son bienvenidas! Si deseas contribuir, sigue estos pasos:  

1. Haz un fork del repositorio.  
2. Crea una nueva rama:  
   ```bash
   git checkout -b feature/NuevaFuncionalidad
   ```  
3. Realiza tus cambios y haz commit:  
   ```bash
   git commit -m "Añade Nueva Funcionalidad"
   ```  
4. Sube los cambios a tu repositorio:  
   ```bash
   git push origin feature/NuevaFuncionalidad
   ```  
5. Crea un pull request.  
