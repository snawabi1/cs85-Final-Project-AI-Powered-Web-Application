# Screenshot Guide for AI Chat Assistant

This document provides instructions for capturing screenshots for the README.md file.

## Screenshots Needed

### 1. Main Chat Interface
- **URL**: http://localhost:8000/ai-chat
- **What to capture**: The main chat form with input field and send button
- **Filename**: `screenshot-main-interface.png`

### 2. Demo Response Example
- **URL**: http://localhost:8000/ai-chat
- **Action**: Type "What is the capital of France?" and submit
- **What to capture**: The page showing both the question and the response
- **Filename**: `screenshot-demo-response.png`

### 3. Demo Mode Message
- **URL**: http://localhost:8000/ai-chat  
- **Action**: Type any question not in the demo list (e.g., "Tell me a joke")
- **What to capture**: The page showing the "🤖 Demo Mode" message
- **Filename**: `screenshot-demo-mode.png`

## How to Add Screenshots to README

1. Create a `screenshots` folder in your project root:
   ```
   mkdir screenshots
   ```

2. Save your screenshots in this folder with the names above

3. Update the README.md Screenshots section:
   ```markdown
   ### Main Chat Interface
   ![Main Interface](screenshots/screenshot-main-interface.png)

   ### Demo Response Example  
   ![Demo Response](screenshots/screenshot-demo-response.png)

   ### Error Handling Demo
   ![Demo Mode](screenshots/screenshot-demo-mode.png)
   ```

## Tips for Good Screenshots

- Use a clean browser window (close extra tabs)
- Make sure the entire form and response are visible
- Use consistent browser zoom level (100%)
- Ensure good contrast and readability
- Crop to focus on the relevant content

## Alternative: Online Screenshots

If you deploy your app online (e.g., to Heroku, Vercel), you can use those URLs for more professional screenshots.
