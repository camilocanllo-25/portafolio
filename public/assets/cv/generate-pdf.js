const puppeteer = require('puppeteer');
const path = require('path');

async function generatePDF() {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    
    // Cargar el archivo HTML
    const htmlPath = path.join(__dirname, 'CV-Camilo-Llorente.html');
    await page.goto(`file://${htmlPath}`, { waitUntil: 'networkidle0' });
    
    // Generar PDF
    await page.pdf({
        path: 'CV-Camilo-Llorente.pdf',
        format: 'A4',
        printBackground: true,
        margin: {
            top: '0.75in',
            right: '0.75in',
            bottom: '0.75in',
            left: '0.75in'
        }
    });
    
    await browser.close();
    console.log('✅ PDF generado exitosamente: CV-Camilo-Llorente.pdf');
}

generatePDF().catch(console.error);
