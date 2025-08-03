<!DOCTYPE html>
<html>
<head>
    <title>AI Chat Assistant</title>
    <style>
        .demo-suggestions {
            margin: 20px 0;
            padding: 15px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }
        .demo-suggestions h4 {
            margin-top: 0;
            color: #666;
        }
        .demo-questions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .demo-btn {
            background: #007cba;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
        }
        .demo-btn:hover {
            background: #005a87;
        }
    </style>
</head>
<body>
    <h2>Ask the AI Assistant</h2>

    <form action="{{ route('ai.handle') }}" method="POST" id="chatForm">
        @csrf
        <input type="text" name="prompt" id="promptInput" placeholder="Ask anything..." required>
        <button type="submit">Send</button>
    </form>

    <div class="demo-suggestions">
        <h4>💡 Try these FREE demo questions:</h4>
        <div class="demo-questions">
            <button type="button" class="demo-btn" onclick="fillPrompt('2+2')">2+2</button>
            <button type="button" class="demo-btn" onclick="fillPrompt('hello')">hello</button>
            <button type="button" class="demo-btn" onclick="fillPrompt('capital of france')">capital of france</button>
            <button type="button" class="demo-btn" onclick="fillPrompt('who are you')">who are you</button>
            <button type="button" class="demo-btn" onclick="fillPrompt('weather demo')">weather (demo)</button>
        </div>
        <p style="font-size: 11px; color: #888; margin-top: 10px;">
            ✅ All demo questions work without any API keys or billing!
        </p>
    </div>

    <script>
        function fillPrompt(text) {
            document.getElementById('promptInput').value = text;
            document.getElementById('chatForm').submit();
        }
    </script>

    @if($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    @isset($original)
        <h4>You asked:</h4>
        <p>{{ $original }}</p>
    @endisset

    @isset($response)
        <h4>AI Response:</h4>
        <textarea readonly>{{ $response }}</textarea>
    @endisset
</body>
</html>
