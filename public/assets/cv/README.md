# CV - Camilo Llorente Vásquez

Este directorio contiene el currículum vitae en formato HTML y PDF.

## Archivos

- `CV-Camilo-Llorente.html` - Versión HTML del CV (fuente)
- `CV-Camilo-Llorente.pdf` - Versión PDF del CV (para descarga)

## Instrucciones para generar PDF

### Opción 1: Desde el navegador
1. Abrir `CV-Camilo-Llorente.html` en el navegador
2. Usar Ctrl+P (Windows) o Cmd+P (Mac)
3. Seleccionar "Guardar como PDF"
4. Configurar márgenes mínimos para mejor diseño

### Opción 2: Usando Puppeteer (Node.js)
```bash
npm install puppeteer
node generate-pdf.js
```

### Opción 3: Usando wkhtmltopdf
```bash
wkhtmltopdf --page-size A4 --margin-top 0.75in --margin-right 0.75in --margin-bottom 0.75in --margin-left 0.75in CV-Camilo-Llorente.html CV-Camilo-Llorente.pdf
```

## Características del CV

- ✅ Diseño moderno y profesional
- ✅ Responsive para diferentes tamaños
- ✅ Optimizado para impresión
- ✅ Información actualizada 2025
- ✅ Proyectos destacados con demos
- ✅ Habilidades técnicas organizadas
- ✅ Experiencia profesional detallada

## Actualización

Para actualizar el CV, editar el archivo HTML y regenerar el PDF usando cualquiera de las opciones anteriores.
