# Certificate-upgrade

A modern, responsive web application for displaying and managing digital certificates. This project allows users to view, download, and share their certificates, including direct integration with LinkedIn.

## Features

- 📱 Responsive certificate display
- 💾 Certificate download functionality
- 🔗 LinkedIn integration for adding certificates to your profile
- 📤 Easy sharing options
- 🎨 Modern and clean UI design

## Live Demo

Visit the live demo at: [certificate-upgrade](https://harshitajain212.github.io/certificate-upgrade/)

## Getting Started

### Local Development

1. Clone the repository:
   ```bash
        git clone https://github.com/harshitajain212/certificate-upgrade.git
   ```

2. Navigate to the project directory:
   ```bash
     cd certificate-upgrade
   ```

3. Open the project in your preferred code editor

4. Start a local server (you can use any local server of your choice):
   - Using Node.js http-server:
     ```bash
     npx http-server
     ```
   - Or using Python:
     ```bash
     python -m http.server 8000
     ```

5. Open your browser and visit `http://localhost:8000`

## Project Structure

- `index.html` - Main HTML file containing the certificate layout
- `styles.css` - CSS styles for the certificate and UI components
- `script.js` - JavaScript code for handling interactions and LinkedIn integration
- `certificate-image.jpeg` - Sample certificate image

## Customization

To customize the certificate for your own use:

1. Replace `certificate-image.jpeg` with your own certificate template
2. Update the certificate details in `certificate.html`
3. Modify styles in `styles.css` to match your branding
4. Adjust the LinkedIn integration parameters in `script.js` if needed

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments

- Built with vanilla JavaScript, HTML5, and CSS3
- Responsive design principles
- LinkedIn API integration for certificate sharing
