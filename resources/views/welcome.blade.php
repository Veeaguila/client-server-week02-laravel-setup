<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Laravel</title>
    <style>
        :root {
            color-scheme: dark;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: radial-gradient(circle at top, #1e293b 0%, #020617 45%);
            color: #e2e8f0;
        }

        .page {
            width: min(100%, 820px);
            padding: 2rem;
            border-radius: 32px;
            background: rgba(15, 23, 42, 0.9);
            box-shadow: 0 30px 70px rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(148, 163, 184, 0.12);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 0.85rem;
            margin-bottom: 1.5rem;
        }

        .brand-dot {
            width: 0.95rem;
            height: 0.95rem;
            border-radius: 999px;
            background: linear-gradient(135deg, #38bdf8, #8b5cf6);
            box-shadow: 0 0 22px rgba(56, 189, 248, 0.55);
        }

        h1 {
            margin: 0;
            font-size: clamp(2.5rem, 5vw, 3.75rem);
            line-height: 1;
            letter-spacing: -0.04em;
        }

        .subtitle {
            margin: 1rem 0 2rem;
            max-width: 42rem;
            color: #94a3b8;
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .info-card {
            border-radius: 24px;
            background: rgba(15, 23, 42, 0.8);
            padding: 1.75rem 1.75rem 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.05);
        }

        .info-card p {
            margin: 0.85rem 0;
            font-size: 1rem;
            color: #cbd5e1;
        }

        .info-card strong {
            display: inline-block;
            width: 10rem;
            color: #f8fafc;
        }

        .info-card .primary {
            margin-top: 1rem;
            font-size: 1.05rem;
            color: #f8fafc;
        }

        @media (max-width: 640px) {
            .page {
                padding: 1.5rem;
            }

            .info-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <article class="page">
        <div class="brand">
            <span class="brand-dot"></span>
            <div>
                <p style="margin:0; font-size:0.85rem; letter-spacing:0.24em; text-transform:uppercase; color:#60a5fa;">Client-Server Technologies</p>
            </div>
        </div>

        <h1>Hello Laravel!</h1>
        <p class="subtitle">Welcome to Client-Server Technologies.</p>

        <section class="info-card">
            <p><strong>Developed by:</strong> Jayvee Aguila</p>
            <p class="primary"><strong>Course:</strong> BSIT</p>
            <p><strong>Section:</strong> C</p>
            <p><strong>Student Number:</strong> 0124-0432</p>
            <p><strong>Subject:</strong> ITST 302</p>
            <p><strong>Date:</strong> August 7, 2026</p>
        </section>
    </article>
</body>
</html>
