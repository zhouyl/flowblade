/**
 * Preview Code Sync
 *
 * Automatically extracts HTML from preview-demo elements and displays
 * formatted code in preview-code elements. This ensures code examples
 * are always in sync with the actual rendered components.
 *
 * If no preview-code element exists, it will be automatically generated.
 */

document.addEventListener('DOMContentLoaded', function() {
    // Find all preview-demo elements
    const demoElements = document.querySelectorAll('.preview-demo');

    demoElements.forEach(demoElement => {
        // Check if preview-code already exists after this demo
        let codeElement = demoElement.nextElementSibling;

        // If it doesn't exist or is not a preview-code, create it
        if (!codeElement || !codeElement.classList.contains('preview-code')) {
            codeElement = createPreviewCodeElement();
            demoElement.parentNode.insertBefore(codeElement, demoElement.nextSibling);
        }

        // Extract and sync code
        syncPreviewCode(demoElement, codeElement);
    });
});

/**
 * Create a new preview-code element
 * @returns {HTMLElement} - The created preview-code element
 */
function createPreviewCodeElement() {
    const codeElement = document.createElement('div');
    codeElement.className = 'preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto mb-4';

    const preElement = document.createElement('pre');
    preElement.className = 'font-mono text-sm';

    const codeBlock = document.createElement('code');
    codeBlock.textContent = 'Loading...';

    preElement.appendChild(codeBlock);
    codeElement.appendChild(preElement);

    return codeElement;
}

/**
 * Sync code from demo to code element
 * @param {HTMLElement} demoElement - The demo element
 * @param {HTMLElement} codeElement - The code element
 */
function syncPreviewCode(demoElement, codeElement) {
    // Extract HTML from demo
    const html = demoElement.innerHTML.trim();

    // Format the HTML
    const formattedHtml = formatHtml(html);

    // Escape HTML for display
    const escapedHtml = escapeHtml(formattedHtml);

    // Update the code element
    const codeBlock = codeElement.querySelector('code');
    if (codeBlock) {
        codeBlock.innerHTML = escapedHtml;
    }
}

/**
 * Format HTML with proper indentation
 * @param {string} html - Raw HTML string
 * @returns {string} - Formatted HTML
 */
function formatHtml(html) {
    let formatted = '';
    let indent = 0;
    const indentStr = '    '; // 4 spaces
    
    // Split by tags
    const tokens = html.match(/(<[^>]+>|[^<]+)/g) || [];
    
    tokens.forEach(token => {
        token = token.trim();
        
        if (!token) return;
        
        // Check if it's a closing tag
        if (token.startsWith('</')) {
            indent = Math.max(0, indent - 1);
            formatted += indentStr.repeat(indent) + token + '\n';
        }
        // Check if it's a self-closing tag
        else if (token.endsWith('/>')) {
            formatted += indentStr.repeat(indent) + token + '\n';
        }
        // Check if it's an opening tag
        else if (token.startsWith('<')) {
            formatted += indentStr.repeat(indent) + token + '\n';
            // Increase indent if not self-closing
            if (!token.endsWith('/>')) {
                indent++;
            }
        }
        // Text content
        else {
            const text = token.trim();
            if (text) {
                formatted += indentStr.repeat(indent) + text + '\n';
            }
        }
    });
    
    return formatted.trim();
}

/**
 * Escape HTML special characters for display
 * @param {string} text - Text to escape
 * @returns {string} - Escaped text
 */
function escapeHtml(text) {
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, m => map[m]);
}

