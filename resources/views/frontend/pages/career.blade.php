@extends('frontend.layouts.app')
@section('title', 'Blog')
@section('content')
<!-- header area -->
@include('frontend.includes.headers.headerOne')
<!-- header area end -->
<style>
:root {
    --ink: #1a2332;
    --paper: #f4f7f9;
    --accent: #1fa99c;
    --accent2: #16c4b5;
    --mid: #8a9bb0;
    --card-bg: #ffffff;
    --border: #dde4ea;
    --shadow: 0 4px 32px rgba(26, 35, 50, 0.09);
    --radius: 16px;
    --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: 'DM Sans', sans-serif;
    background: var(--paper);
    color: var(--ink);
    min-height: 100vh;
    overflow-x: hidden;
}
#smooth-content{
    position: relative;
    z-index: -1;
}
/* ── HERO ── */
.hero {
    position: relative;
    padding: clamp(48px, 8vw, 96px) clamp(20px, 5vw, 80px) clamp(32px, 5vw, 56px);
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 80% 60% at 70% -10%, rgba(31, 169, 156, 0.14) 0%, transparent 60%),
        radial-gradient(ellipse 60% 50% at -10% 80%, rgba(22, 196, 181, 0.10) 0%, transparent 55%);
    pointer-events: none;
}

.hero-inner {
    max-width: 1120px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.78rem;
    font-weight: 500;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--accent);
    margin-bottom: 20px;
}

.hero-eyebrow::before {
    content: '';
    display: block;
    width: 28px;
    height: 2px;
    background: var(--accent);
}

.hero h1 {
    font-family: 'Syne', sans-serif;
    font-size: clamp(2.4rem, 6vw, 5rem);
    font-weight: 800;
    line-height: 1.05;
    letter-spacing: -0.03em;
    color: var(--ink);
    max-width: 720px;
}

.hero h1 em {
    font-style: normal;
    color: var(--accent);
}

.hero-sub {
    margin-top: 20px;
    font-size: clamp(1rem, 2vw, 1.18rem);
    font-weight: 300;
    color: #5a5870;
    max-width: 480px;
    line-height: 1.65;
}

/* ── LAYOUT ── */
.page-body {
    max-width: 1120px;
    margin: 0 auto;
    z-index: -1;
}

/* ── TABS ── */
.tabs-wrap {
    position: relative;
    margin-bottom: clamp(24px, 4vw, 40px);
}

.tabs-scroll {
    display: flex;
    gap: 8px;
    overflow-x: auto;
    padding-bottom: 4px;
    scrollbar-width: none;
    -webkit-overflow-scrolling: touch;
}

.tabs-scroll::-webkit-scrollbar {
    display: none;
}

.tab-btn {
    flex-shrink: 0;
    font-family: 'Syne', sans-serif;
    font-size: 0.88rem;
    font-weight: 600;
    letter-spacing: 0.01em;
    padding: 10px 22px;
    border-radius: 100px;
    border: 1.5px solid var(--border);
    background: var(--card-bg);
    color: #6b6b80;
    cursor: pointer;
    transition: var(--transition);
    white-space: nowrap;
    display: flex;
    align-items: center;
    gap: 7px;
}

.tab-btn:hover {
    border-color: var(--ink);
    color: var(--ink);
    background: var(--paper);
}

.tab-btn.active {
    background: var(--ink);
    color: #fff;
    border-color: var(--ink);
    box-shadow: 0 4px 16px rgba(26, 35, 50, 0.18);
}

.tab-icon {
    font-size: 1rem;
}

/* fade indicator on right of scroll */
.tabs-wrap::after {
    content: '';
    position: absolute;
    right: 0;
    top: 0;
    bottom: 4px;
    width: 48px;
    background: linear-gradient(to right, transparent, var(--paper));
    pointer-events: none;
}

/* ── FORM CARD ── */
.form-panel {
    display: none;
    background: var(--card-bg);
    border-radius: var(--radius);
    border: 1.5px solid var(--border);
    box-shadow: var(--shadow);
    overflow: hidden;
    animation: slideUp 0.38s cubic-bezier(0.4, 0, 0.2, 1) both;
}

.form-panel.active {
    display: block;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(18px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.form-top {
    display: grid;
    grid-template-columns: 1fr auto;
    align-items: start;
    gap: 16px;
    padding: clamp(28px, 4vw, 48px) clamp(24px, 4vw, 48px) 0;
    margin-bottom: 32px;
}

.form-title {
    font-family: 'Syne', sans-serif;
    font-size: clamp(1.5rem, 3.5vw, 2.2rem);
    font-weight: 700;
    letter-spacing: -0.025em;
    color: var(--ink);
    line-height: 1.15;
}

.form-subtitle {
    margin-top: 6px;
    font-size: 0.95rem;
    font-weight: 300;
    color: #7a7a8e;
}

.form-badge {
    font-family: 'Syne', sans-serif;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 6px 14px;
    border-radius: 100px;
    background: rgba(255, 107, 53, 0.1);
    color: var(--accent);
    white-space: nowrap;
    margin-top: 4px;
}

/* ── FORM FIELDS ── */
.form-body {
    padding: 0 clamp(24px, 4vw, 48px) clamp(28px, 4vw, 48px);
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: clamp(14px, 2vw, 24px);
    margin-bottom: clamp(14px, 2vw, 24px);
}

@media (max-width: 600px) {
    .form-grid {
        grid-template-columns: 1fr;
    }

    .form-top {
        grid-template-columns: 1fr;
    }

    .form-badge {
        display: inline-block;
        width: fit-content;
    }
}

.full {
    grid-column: 1 / -1;
}

.field {
    display: flex;
    flex-direction: column;
    gap: 7px;
}

.field label {
    font-size: 0.82rem;
    font-weight: 500;
    letter-spacing: 0.02em;
    color: #4a4a5a;
    text-transform: uppercase;
}

.field label span {
    color: var(--accent);
}

.field input,
.field select,
.field textarea {
    width: 100%;
    padding: 12px 16px;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.97rem;
    font-weight: 400;
    color: var(--ink);
    background: #fafaf8;
    border: 1.5px solid var(--border);
    border-radius: 10px;
    transition: var(--transition);
    outline: none;
    -webkit-appearance: none;
    appearance: none;
}

.field select {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236b6b80' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 42px;
}

.field textarea {
    resize: vertical;
    min-height: 110px;
    line-height: 1.6;
}

.field input:focus,
.field select:focus,
.field textarea:focus {
    border-color: var(--accent);
    background: #fff;
    box-shadow: 0 0 0 3px rgba(31, 169, 156, 0.12);
}

.field input::placeholder,
.field textarea::placeholder {
    color: #b0b0c0;
}

/* ── CHECKBOXES ── */
.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    gap: 10px;
    margin-top: 4px;
}

@media (max-width: 480px) {
    .skills-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

.skill-chip {
    display: flex;
    align-items: center;
    gap: 9px;
    padding: 10px 14px;
    border-radius: 10px;
    border: 1.5px solid var(--border);
    background: #fafaf8;
    cursor: pointer;
    transition: var(--transition);
    user-select: none;
}

.skill-chip:hover {
    border-color: var(--ink);
    background: var(--paper);
}

.skill-chip input[type="checkbox"] {
    width: 16px;
    height: 16px;
    accent-color: var(--ink);
    cursor: pointer;
    flex-shrink: 0;
}

.skill-chip span {
    font-size: 0.88rem;
    font-weight: 400;
    color: #4a4a5a;
    line-height: 1.3;
}

.skill-chip:has(input:checked) {
    border-color: var(--accent);
    background: var(--accent);
}

.skill-chip:has(input:checked) span {
    color: #fff;
}

/* ── FILE UPLOAD ── */
.upload-zone {
    position: relative;
    border: 2px dashed var(--border);
    border-radius: 10px;
    background: #fafaf8;
    padding: clamp(20px, 3vw, 32px) 20px;
    text-align: center;
    cursor: pointer;
    transition: var(--transition);
}

.upload-zone:hover {
    border-color: var(--ink);
    background: var(--paper);
}

.upload-zone input[type="file"] {
    position: absolute;
    inset: 0;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

.upload-icon {
    font-size: 2rem;
    margin-bottom: 10px;
    display: block;
    opacity: 0.5;
}

.upload-text {
    font-size: 0.9rem;
    color: #7a7a8e;
    font-weight: 300;
}

.upload-text strong {
    color: var(--ink);
    font-weight: 500;
}

.upload-hint {
    margin-top: 4px;
    font-size: 0.78rem;
    color: #b0b0c0;
    letter-spacing: 0.02em;
}

/* ── SUBMIT ── */
.submit-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    margin-top: clamp(20px, 3vw, 32px);
    flex-wrap: wrap;
}

.submit-note {
    font-size: 0.82rem;
    color: #9a9aaa;
    font-weight: 300;
    flex: 1;
    min-width: 180px;
}

.submit-btn {
    font-family: 'Syne', sans-serif;
    font-size: 0.95rem;
    font-weight: 700;
    letter-spacing: 0.02em;
    padding: 14px 36px;
    border-radius: 100px;
    border: none;
    background: linear-gradient(135deg, var(--accent) 0%, #13b8aa 100%);
    color: #fff;
    cursor: pointer;
    transition: var(--transition);
    white-space: nowrap;
    display: flex;
    align-items: center;
    gap: 8px;
}

.submit-btn:hover {
    background: linear-gradient(135deg, #18c0b1 0%, var(--accent) 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(31, 169, 156, 0.35);
}

.submit-btn:active {
    transform: translateY(0);
}

/* ── DIVIDER ── */
.section-label {
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--mid);
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.section-label::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--border);
}

/* ── TOAST ── */
.toast {
    position: fixed;
    bottom: 32px;
    left: 50%;
    transform: translateX(-50%) translateY(80px);
    background: var(--ink);
    color: #fff;
    font-family: 'Syne', sans-serif;
    font-size: 0.9rem;
    font-weight: 600;
    padding: 14px 28px;
    border-radius: 100px;
    box-shadow: 0 8px 32px rgba(15, 14, 23, 0.25);
    z-index: 999;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s;
    opacity: 0;
    pointer-events: none;
    white-space: nowrap;
}

.toast.show {
    transform: translateX(-50%) translateY(0);
    opacity: 1;
}

/* ── FOOTER ── */
.page-footer {
    text-align: center;
    padding: 24px 20px 40px;
    font-size: 0.8rem;
    color: #b0b0c0;
    font-weight: 300;
}
.alert-success {
    background: #e6f9f7;
    border: 1px solid #1fa99c;
    color: #0f766e;
    padding: 14px 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    font-weight: 600;
    animation: fadeIn 0.4s ease-in-out;
}

.alert-error {
    background: #ffeaea;
    border: 1px solid #ff4d4d;
    color: #b91c1c;
    padding: 14px 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    font-weight: 500;
}

.alert-error ul {
    margin: 0;
    padding-left: 18px;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
<div id="smooth-content">
    <!-- <div style="height:4px;background:linear-gradient(90deg,#1fa99c,#16c4b5);width:100%;"></div> -->

    <!-- <div class="hero">
        <div class="hero-inner">
            <div style="margin-bottom:28px;">
                <span
                    style="font-family:'Syne',sans-serif;font-size:1.6rem;font-weight:800;color:#1a2332;letter-spacing:-0.03em;">ZALGO</span><span
                    style="font-family:'Syne',sans-serif;font-size:0.72rem;font-weight:600;letter-spacing:0.22em;color:#1fa99c;display:block;margin-top:-2px;">INFOTECH</span>
            </div>
            <div class="hero-eyebrow">We're hiring</div>
            <h1>Join Our<br><em>Tech Team</em></h1>
            <p class="hero-sub">Shape the future of technology with us. Apply for positions across various tech domains.
            </p>
        </div>
    </div> -->

    <div class="page-body pt-120 pb-120">
        {{-- Success Message --}}
@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Error Message --}}
@if ($errors->any())
    <div class="alert-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <!-- TABS -->
        <div class="tabs-wrap">
            <div class="tabs-scroll" id="tabsRow">
                <button class="tab-btn active" data-form="web-dev"><span class="tab-icon">🌐</span>Web Dev</button>
                <button class="tab-btn" data-form="mobile-dev"><span class="tab-icon">📱</span>Mobile Dev</button>
                <button class="tab-btn" data-form="data-science"><span class="tab-icon">📊</span>Data Science</button>
                <button class="tab-btn" data-form="devops"><span class="tab-icon">⚙️</span>DevOps</button>
                <button class="tab-btn" data-form="cybersecurity"><span class="tab-icon">🔒</span>Cybersecurity</button>
                <button class="tab-btn" data-form="ai-ml"><span class="tab-icon">🤖</span>AI / ML</button>
            </div>
        </div>

        <!-- ── WEB DEV ── -->
        <div class="form-panel active" id="web-dev">
            <div class="form-top">
                <div>
                    <div class="form-title">Web Development</div>
                    <div class="form-subtitle">Create amazing digital experiences for millions of users</div>
                </div>
                <div class="form-badge">Open Role</div>
            </div>
            <div class="form-body">
               <form method="POST" action="{{ route('job.apply') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_type" value="web-dev">
                    <div class="section-label">Personal Info</div>
                    <div class="form-grid">
                        <div class="field"><label>Full Name <span>*</span></label><input type="text" name="name"
                                placeholder="Jane Smith" required></div>
                        <div class="field"><label>Email <span>*</span></label><input type="email" name="email"
                                placeholder="jane@example.com" required></div>
                        <div class="field"><label>Phone</label><input type="tel" name="phone"
                                placeholder="+1 555 000 0000"></div>
                        <div class="field"><label>Experience <span>*</span></label>
                            <select name="experience" required>
                                <option value="">Select level</option>
                                <option>0–1 years (Entry Level)</option>
                                <option>2–3 years (Junior)</option>
                                <option>4–6 years (Mid-level)</option>
                                <option>7–10 years (Senior)</option>
                                <option>10+ years (Lead / Architect)</option>
                            </select>
                        </div>
                    </div>
                    <div class="section-label">Skills</div>
                    <div class="form-grid" style="margin-bottom:clamp(14px,2vw,24px)">
                        <div class="field full">
                            <label>Web Technologies <span>*</span></label>
                            <div class="skills-grid">
                                <label class="skill-chip">
                                    <input type="checkbox" name="skills[]" value="Html/css">
                                <span>HTML /CSS</span></label>

                                <label class="skill-chip">
                                    <input type="checkbox" name="skills[]" value="Javascript">
                                <span>JavaScript</span></label>

                                <label class="skill-chip">
                                    <input type="checkbox" name="skills[]" value="React">
                                <span>React</span></label>

                                <label class="skill-chip">
                                    <input type="checkbox" name="skills[]" value="Angular">
                                <span>Angular</span></label>

                                <label class="skill-chip">
                                    <input type="checkbox" name="skills[]" value="Vue.js">
                                <span>Vue.js</span></label>

                                <label class="skill-chip"> 
                                    <input type="checkbox" name="skills[]" value="Node.js">
                                <span>Node.js</span></label>

                            </div>
                        </div>
                    </div>
                    <div class="section-label">Details</div>
                    <div class="form-grid">
                        <div class="field full"><label>Portfolio URL</label><input type="text" name="portfolio"
                                placeholder="https://your-portfolio.com"></div>
                        <div class="field full"><label>Cover Letter</label><textarea name="cover"
                                placeholder="Tell us why you're perfect for this role…"></textarea></div>
                        <div class="field full">
                            <label>Resume <span>*</span></label>
                            <div class="upload-zone">
                                <input type="file" name="resume" accept=".pdf,.doc,.docx" required
                                    onchange="updateUpload(this)">
                                <span class="upload-icon">📎</span>
                                <div class="upload-text"><strong>Click to upload</strong> or drag &amp; drop</div>
                                <div class="upload-hint">PDF, DOC, DOCX accepted</div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-row">
                        <span class="submit-note">We respond within 5–7 business days.</span>
                        <button type="submit" class="submit-btn">Submit Application →</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- ── MOBILE DEV ── -->
        <div class="form-panel" id="mobile-dev">
            <div class="form-top">
                <div>
                    <div class="form-title">Mobile Development</div>
                    <div class="form-subtitle">Build the next generation of mobile applications</div>
                </div>
                <div class="form-badge">Open Role</div>
            </div>
            <div class="form-body">
                <form method="POST" action="{{ route('job.apply') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_type" value="Mobile-dev">
                    <div class="section-label">Personal Info</div>
                    <div class="form-grid">
                        <div class="field"><label>Full Name <span>*</span></label><input type="text" name="name"
                                placeholder="Alex Johnson" required></div>
                        <div class="field"><label>Email <span>*</span></label><input type="email" name="email"
                                placeholder="alex@example.com" required></div>
                        <div class="field"><label>Phone</label><input type="tel" name="phone"
                                placeholder="+1 555 000 0000"></div>
                        <div class="field"><label>Experience <span>*</span></label>
                            <select name="experience" required>
                                <option value="">Select level</option>
                                <option>0–1 years (Entry Level)</option>
                                <option>2–3 years (Junior)</option>
                                <option>4–6 years (Mid-level)</option>
                                <option>7–10 years (Senior)</option>
                                <option>10+ years (Lead / Architect)</option>
                            </select>
                        </div>
                    </div>
                    <div class="section-label">Skills</div>
                    <div class="form-grid">
                        <div class="field full">
                            <label>Platforms &amp; Technologies <span>*</span></label>
                            <div class="skills-grid">
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="iOS/Swift"><span>iOS /
                                        Swift</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="Android/Kotlin"><span>Android /
                                        Kotlin</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="React Native"><span>React
                                        Native</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="Flutter"><span>Flutter</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="Xamarin"><span>Xamarin</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                       name="skills[]" value="Ionic"><span>Ionic</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="section-label">Details</div>
                    <div class="form-grid">
                        <div class="field full"><label>Published Apps</label><textarea name="apps"
                                placeholder="List app store URLs of your published applications…"></textarea></div>
                        <div class="field full"><label>Cover Letter</label><textarea name="cover"
                                placeholder="Tell us about your mobile development experience…"></textarea></div>
                        <div class="field full">
                            <label>Resume <span>*</span></label>
                            <div class="upload-zone"><input type="file" name="resume" accept=".pdf,.doc,.docx" required
                                    onchange="updateUpload(this)"><span class="upload-icon">📎</span>
                                <div class="upload-text"><strong>Click to upload</strong> or drag &amp; drop</div>
                                <div class="upload-hint">PDF, DOC, DOCX accepted</div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-row"><span class="submit-note">We respond within 5–7 business days.</span><button
                            type="submit" class="submit-btn">Submit Application →</button></div>
                </form>
            </div>
        </div>

        <!-- ── DATA SCIENCE ── -->
        <div class="form-panel" id="data-science">
            <div class="form-top">
                <div>
                    <div class="form-title">Data Science</div>
                    <div class="form-subtitle">Transform raw data into actionable business insights</div>
                </div>
                <div class="form-badge">Open Role</div>
            </div>
            <div class="form-body">
               <form method="POST" action="{{ route('job.apply') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_type" value="Data-Science">
                    <div class="section-label">Personal Info</div>
                    <div class="form-grid">
                        <div class="field"><label>Full Name <span>*</span></label><input type="text" name="name"
                                placeholder="Sam Lee" required></div>
                        <div class="field"><label>Email <span>*</span></label><input type="email" name="email"
                                placeholder="sam@example.com" required></div>
                        <div class="field"><label>Phone</label><input type="tel" name="phone"
                                placeholder="+1 555 000 0000"></div>
                        <div class="field"><label>Highest Degree <span>*</span></label>
                            <select name="degree" required>
                                <option value="">Select degree</option>
                                <option>Bachelor's Degree</option>
                                <option>Master's Degree</option>
                                <option>PhD</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="section-label">Skills</div>
                    <div class="form-grid">
                        <div class="field full">
                            <label>Data Science Skills <span>*</span></label>
                            <div class="skills-grid">
                                <label class="skill-chip"><input type="checkbox"
                                       name="skills[]" value="Python"><span>Python</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="R"><span>R</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="SQL"><span>SQL</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="Tableau"><span>Tableau</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="Power BI"><span>Power
                                        BI</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="TensorFlow"><span>TensorFlow</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="section-label">Details</div>
                    <div class="form-grid">
                        <div class="field full"><label>Projects &amp; Achievements</label><textarea name="projects"
                                placeholder="Describe notable data science projects and results…"></textarea></div>
                        <div class="field full"><label>GitHub / Portfolio URL</label><input type="text" name="github"
                                placeholder="https://github.com/yourusername"></div>
                        <div class="field full"><label>Cover Letter</label><textarea name="cover"
                                placeholder="Share your passion for data science…"></textarea></div>
                        <div class="field full">
                            <label>Resume <span>*</span></label>
                            <div class="upload-zone"><input type="file" name="resume" accept=".pdf,.doc,.docx" required
                                    onchange="updateUpload(this)"><span class="upload-icon">📎</span>
                                <div class="upload-text"><strong>Click to upload</strong> or drag &amp; drop</div>
                                <div class="upload-hint">PDF, DOC, DOCX accepted</div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-row"><span class="submit-note">We respond within 5–7 business days.</span><button
                            type="submit" class="submit-btn">Submit Application →</button></div>
                </form>
            </div>
        </div>

        <!-- ── DEVOPS ── -->
        <div class="form-panel" id="devops">
            <div class="form-top">
                <div>
                    <div class="form-title">DevOps</div>
                    <div class="form-subtitle">Bridge development and operations for seamless delivery</div>
                </div>
                <div class="form-badge">Open Role</div>
            </div>
            <div class="form-body">
               <form method="POST" action="{{ route('job.apply') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_type" value="DevOps">
                    <div class="section-label">Personal Info</div>
                    <div class="form-grid">
                        <div class="field"><label>Full Name <span>*</span></label><input type="text" name="name"
                                placeholder="Chris Park" required></div>
                        <div class="field"><label>Email <span>*</span></label><input type="email" name="email"
                                placeholder="chris@example.com" required></div>
                        <div class="field"><label>Phone</label><input type="tel" name="phone"
                                placeholder="+1 555 000 0000"></div>
                        <div class="field"><label>Experience <span>*</span></label>
                            <select name="experience" required>
                                <option value="">Select level</option>
                                <option>0–2 years (Entry Level)</option>
                                <option>3–5 years (Mid-level)</option>
                                <option>6–8 years (Senior)</option>
                                <option>9+ years (Lead)</option>
                            </select>
                        </div>
                    </div>
                    <div class="section-label">Skills</div>
                    <div class="form-grid">
                        <div class="field full">
                            <label>DevOps Tools <span>*</span></label>
                            <div class="skills-grid">
                                <label class="skill-chip"><input type="checkbox"
                                       name="skills[]" value="Docker"><span>Docker</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                       name="skills[]" value="Kubernetes"><span>Kubernetes</span></label>
                                <label class="skill-chip"><input type="checkbox" value="AWS"><span>AWS</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                       name="skills[]" value="Azure"><span>Azure</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                       name="skills[]" value="Jenkins"><span>Jenkins</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                       name="skills[]" value="Terraform"><span>Terraform</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="section-label">Details</div>
                    <div class="form-grid">
                        <div class="field full"><label>Certifications</label><input type="text" name="certs"
                                placeholder="e.g. AWS Certified Solutions Architect, CKA…"></div>
                        <div class="field full"><label>Cover Letter</label><textarea name="cover"
                                placeholder="Describe your DevOps philosophy and experience…"></textarea></div>
                        <div class="field full">
                            <label>Resume <span>*</span></label>
                            <div class="upload-zone"><input type="file" name="resume" accept=".pdf,.doc,.docx" required
                                    onchange="updateUpload(this)"><span class="upload-icon">📎</span>
                                <div class="upload-text"><strong>Click to upload</strong> or drag &amp; drop</div>
                                <div class="upload-hint">PDF, DOC, DOCX accepted</div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-row"><span class="submit-note">We respond within 5–7 business days.</span><button
                            type="submit" class="submit-btn">Submit Application →</button></div>
                </form>
            </div>
        </div>

        <!-- ── CYBERSECURITY ── -->
        <div class="form-panel" id="cybersecurity">
            <div class="form-top">
                <div>
                    <div class="form-title">Cybersecurity</div>
                    <div class="form-subtitle">Protect our digital assets and infrastructure</div>
                </div>
                <div class="form-badge">Open Role</div>
            </div>
            <div class="form-body">
                <form method="POST" action="{{ route('job.apply') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_type" value="Cybersecurity">
                    <div class="section-label">Personal Info</div>
                    <div class="form-grid">
                        <div class="field"><label>Full Name <span>*</span></label><input type="text" name="name"
                                placeholder="Morgan Rivera" required></div>
                        <div class="field"><label>Email <span>*</span></label><input type="email" name="email"
                                placeholder="morgan@example.com" required></div>
                        <div class="field"><label>Phone</label><input type="tel" name="phone"
                                placeholder="+1 555 000 0000"></div>
                        <div class="field"><label>Security Clearance</label>
                            <select name="clearance">
                                <option value="">No clearance</option>
                                <option>Public Trust</option>
                                <option>Secret</option>
                                <option>Top Secret</option>
                                <option>TS/SCI</option>
                            </select>
                        </div>
                    </div>
                    <div class="section-label">Skills</div>
                    <div class="form-grid">
                        <div class="field full">
                            <label>Specializations <span>*</span></label>
                            <div class="skills-grid">
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="Network Security"><span>Network
                                        Security</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="Penetration Testing"><span>Penetration Testing</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="Incident Response"><span>Incident Response</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="Malware Analysis"><span>Malware
                                        Analysis</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="Compliance"><span>Compliance
                                        (SOX, HIPAA)</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="Digital Forensics"><span>Digital
                                        Forensics</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="section-label">Details</div>
                    <div class="form-grid">
                        <div class="field full"><label>Certifications</label><input type="text" name="certs"
                                placeholder="e.g. CISSP, CEH, CISM, CompTIA Security+…"></div>
                        <div class="field full"><label>Cover Letter</label><textarea name="cover"
                                placeholder="Describe your cybersecurity experience and approach…"></textarea></div>
                        <div class="field full">
                            <label>Resume <span>*</span></label>
                            <div class="upload-zone"><input type="file" name="resume" accept=".pdf,.doc,.docx" required
                                    onchange="updateUpload(this)"><span class="upload-icon">📎</span>
                                <div class="upload-text"><strong>Click to upload</strong> or drag &amp; drop</div>
                                <div class="upload-hint">PDF, DOC, DOCX accepted</div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-row"><span class="submit-note">We respond within 5–7 business days.</span><button
                            type="submit" class="submit-btn">Submit Application →</button></div>
                </form>
            </div>
        </div>

        <!-- ── AI/ML ── -->
        <div class="form-panel" id="ai-ml">
            <div class="form-top">
                <div>
                    <div class="form-title">AI / ML Engineering</div>
                    <div class="form-subtitle">Shape the future with artificial intelligence and machine learning</div>
                </div>
                <div class="form-badge">Open Role</div>
            </div>
            <div class="form-body">
               <form method="POST" action="{{ route('job.apply') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_type" value="AI / ML Engineering">
                    <div class="section-label">Personal Info</div>
                    <div class="form-grid">
                        <div class="field"><label>Full Name <span>*</span></label><input type="text" name="name"
                                placeholder="Taylor Kim" required></div>
                        <div class="field"><label>Email <span>*</span></label><input type="email" name="email"
                                placeholder="taylor@example.com" required></div>
                        <div class="field"><label>Phone</label><input type="tel" name="phone"
                                placeholder="+1 555 000 0000"></div>
                        <div class="field"><label>Highest Degree <span>*</span></label>
                            <select name="degree" required>
                                <option value="">Select degree</option>
                                <option>Bachelor's Degree</option>
                                <option>Master's Degree</option>
                                <option>PhD</option>
                            </select>
                        </div>
                    </div>
                    <div class="section-label">Skills</div>
                    <div class="form-grid">
                        <div class="field full">
                            <label>AI / ML Technologies <span>*</span></label>
                            <div class="skills-grid">
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="TensorFlow"><span>TensorFlow</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="PyTorch"><span>PyTorch</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="Scikit-learn"><span>Scikit-learn</span></label>
                                <label class="skill-chip"><input type="checkbox"
                                      name="skills[]"  value="OpenCV"><span>OpenCV</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="NLP"><span>NLP</span></label>
                                <label class="skill-chip"><input type="checkbox" name="skills[]" value="Deep Learning"><span>Deep
                                        Learning</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="section-label">Details</div>
                    <div class="form-grid">
                        <div class="field full"><label>Publications &amp; Projects</label><textarea name="research"
                                placeholder="List AI/ML research, publications, or notable projects…"></textarea></div>
                        <div class="field full"><label>GitHub / Portfolio URL</label><input type="text" name="github"
                                placeholder="https://github.com/yourusername"></div>
                        <div class="field full"><label>Cover Letter</label><textarea name="cover"
                                placeholder="Share your vision for AI/ML and your experience…"></textarea></div>
                        <div class="field full">
                            <label>Resume <span>*</span></label>
                            <div class="upload-zone"><input type="file" name="resume" accept=".pdf,.doc,.docx" required
                                    onchange="updateUpload(this)"><span class="upload-icon">📎</span>
                                <div class="upload-text"><strong>Click to upload</strong> or drag &amp; drop</div>
                                <div class="upload-hint">PDF, DOC, DOCX accepted</div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-row"><span class="submit-note">We respond within 5–7 business days.</span><button
                            type="submit" class="submit-btn">Submit Application →</button></div>
                </form>
            </div>
        </div>

    </div><!-- /page-body -->
    @include('frontend.includes.footers.footerOne')
</div>
<!-- <div class="page-footer">© 2026 Tech Team Careers · All rights reserved</div>

    <div class="toast" id="toast">🎉 Application submitted! We'll be in touch soon.</div> -->

<script>
// Tab switching
document.getElementById('tabsRow').addEventListener('click', function(e) {
    const btn = e.target.closest('.tab-btn');
    if (!btn) return;
    const target = btn.dataset.form;
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.form-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById(target).classList.add('active');
    // scroll into view on mobile
    btn.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'center'
    });
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// File upload label update
function updateUpload(input) {
    const zone = input.closest('.upload-zone');
    const text = zone.querySelector('.upload-text');
    if (input.files[0]) {
        text.innerHTML = `<strong>Selected:</strong> ${input.files[0].name}`;
    }
}

// Form submission
function handleSubmit(e) {
    e.preventDefault();
    const toast = document.getElementById('toast');
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 4000);
    e.target.reset();
    // reset upload labels
    e.target.querySelectorAll('.upload-text').forEach(el => {
        el.innerHTML = '<strong>Click to upload</strong> or drag &amp; drop';
    });
}
</script>
<script>
    setTimeout(function() {
        const success = document.querySelector('.alert-success');
        if(success){
            success.style.display = 'none';
        }
    }, 5000);
</script>

@endsection