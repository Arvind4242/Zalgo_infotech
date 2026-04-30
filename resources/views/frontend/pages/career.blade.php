@extends('frontend.layouts.app')
@section('title', 'Careers')
@section('content')
<!-- header area -->
@include('frontend.includes.headers.headerOne')
<!-- header area end -->
<style>
:root {
    --ink: #1a2332;
    --paper: #f4f7f9;
    --accent: #006d75;
    --accent2: #006d75;
    --mid: #8a9bb0;
    --card-bg: #ffffff;
    --border: #dde4ea;
    --shadow: 0 4px 32px rgba(26, 35, 50, 0.09);
    --radius: 16px;
    --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
.tab-btn.active {
    background: var(--main-600) !important;
    border-color: var(--main-600) !important;
    box-shadow: 0 4px 16px rgba(26, 35, 50, 0.18);
    color:#fff !important;
}
.tab-icon { font-size: 1rem; }
.tabs-wrap { position: relative; margin-bottom: clamp(24px, 4vw, 40px); }
.tabs-scroll { display: flex; gap: 8px; overflow-x: auto; padding-bottom: 4px; scrollbar-width: none; -webkit-overflow-scrolling: touch; }
.tabs-scroll::-webkit-scrollbar { display: none; }
.tabs-wrap::after { content: ''; position: absolute; right: 0; top: 0; bottom: 4px; width: 48px; background: linear-gradient(to right, transparent, var(--paper)); pointer-events: none; }
.form-panel { display: none; background: var(--card-bg); border-radius: var(--radius); border: 1.5px solid var(--border); box-shadow: var(--shadow); overflow: hidden; animation: slideUp 0.38s cubic-bezier(0.4, 0, 0.2, 1) both; }
.form-panel.active { display: block; }
@keyframes slideUp { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: translateY(0); } }
.form-top { display: grid; grid-template-columns: 1fr auto; align-items: start; gap: 16px; padding: clamp(28px, 4vw, 48px) clamp(24px, 4vw, 48px) 0; margin-bottom: 32px; }
.form-title { font-family: 'Syne', sans-serif; font-size: clamp(1.5rem, 3.5vw, 2.2rem); font-weight: 700; letter-spacing: -0.025em; color: var(--ink); line-height: 1.15; }
.form-subtitle { margin-top: 6px; font-weight: 300; color: #7a7a8e; }
.form-badge { font-family: 'Syne', sans-serif; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; border-radius: 100px; background: rgba(255, 107, 53, 0.1); color: var(--accent); white-space: nowrap; margin-top: 4px; }
.form-body { padding: 0 clamp(24px, 4vw, 48px) clamp(28px, 4vw, 48px); }
.form-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: clamp(14px, 2vw, 24px); margin-bottom: clamp(14px, 2vw, 24px); }
@media (max-width: 600px) { .form-grid { grid-template-columns: 1fr; } .form-top { grid-template-columns: 1fr; } .form-badge { display: inline-block; width: fit-content; } }
.full { grid-column: 1 / -1; }
.field { display: flex; flex-direction: column; gap: 7px; }
.field label { font-weight: 500; letter-spacing: 0.02em; color: #4a4a5a; text-transform: uppercase; }
.field label span { color: var(--accent); }
.field input,.field select,.field textarea { width: 100%; padding: 12px 16px; font-family: 'DM Sans', sans-serif; font-weight: 400; color: var(--ink); background: #fafaf8; border: 1.5px solid var(--border); border-radius: 10px; transition: var(--transition); outline: none; -webkit-appearance: none; appearance: none; }
.field select { background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236b6b80' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 14px center; padding-right: 42px; }
.field textarea { resize: vertical; min-height: 110px; line-height: 1.6; }
.field input:focus,.field select:focus,.field textarea:focus { border-color: var(--accent); background: #fff; box-shadow: 0 0 0 3px rgba(31,169,156,0.12); }
.field input::placeholder,.field textarea::placeholder { color: #b0b0c0; }
.skills-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 10px; margin-top: 4px; }
@media (max-width: 480px) { .skills-grid { grid-template-columns: repeat(2, 1fr); } }
.skill-chip { display: flex; align-items: center; gap: 9px; padding: 10px 14px; border-radius: 10px; border: 1.5px solid var(--border); background: #fafaf8; cursor: pointer; transition: var(--transition); user-select: none; }
.skill-chip:hover { border-color: var(--ink); background: var(--paper); }
.skill-chip input[type="checkbox"] { width: 16px; height: 16px; accent-color: var(--ink); cursor: pointer; flex-shrink: 0; }
.skill-chip span { font-weight: 400; color: #4a4a5a; line-height: 1.3; }
.skill-chip:has(input:checked) { border-color: var(--accent); background: var(--accent); }
.skill-chip:has(input:checked) span { color: #fff; }
.upload-zone { position: relative; border: 2px dashed var(--border); border-radius: 10px; background: #fafaf8; padding: clamp(20px,3vw,32px) 20px; text-align: center; cursor: pointer; transition: var(--transition); }
.upload-zone:hover { border-color: var(--ink); background: var(--paper); }
.upload-zone input[type="file"] { position: absolute; inset: 0; opacity: 0; width: 100%; height: 100%; cursor: pointer; }
.upload-icon { font-size: 2rem; margin-bottom: 10px; display: block; opacity: 0.5; }
.upload-text { color: #7a7a8e; font-weight: 300; }
.upload-text strong { color: var(--ink); font-weight: 500; }
.upload-hint { margin-top: 4px; color: #b0b0c0; letter-spacing: 0.02em; }
.submit-row { display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-top: clamp(20px,3vw,32px); flex-wrap: wrap; }
.submit-note { color: #9a9aaa; font-weight: 300; flex: 1; min-width: 180px; }
.submit-btn { font-family: 'Syne', sans-serif; font-weight: 700; letter-spacing: 0.02em; padding: 14px 36px; border-radius: 100px; border: none; background-color: var(--accent); color: #fff; cursor: pointer; transition: var(--transition); white-space: nowrap; display: flex; align-items: center; gap: 8px; }
.submit-btn:hover { background-color: #201e1e; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(31,169,156,0.35); }
.submit-btn:active { transform: translateY(0); }
.section-label { font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--mid); margin-bottom: 10px; display: flex; align-items: center; gap: 10px; }
.section-label::after { content: ''; flex: 1; height: 1px; background: var(--border); }
.alert-success { background: #e6f9f7; border: 1px solid #1fa99c; color: #0f766e; padding: 14px 20px; border-radius: 10px; margin-bottom: 20px; font-weight: 600; animation: fadeIn 0.4s ease-in-out; }
.alert-error { background: #ffeaea; border: 1px solid #ff4d4d; color: #b91c1c; padding: 14px 20px; border-radius: 10px; margin-bottom: 20px; font-weight: 500; }
.alert-error ul { margin: 0; padding-left: 18px; }
@keyframes fadeIn { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
</style>

<div id="smooth-content">
    <div class="page-body pt-120 pb-120">

        {{-- Success / Error Messages --}}
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if($jobOpenings->isEmpty())
            <div class="text-center py-5">
                <p style="color:#7a7a8e;font-size:1.1rem;">No open positions at the moment. Check back soon!</p>
            </div>
        @else

        <!-- TABS -->
        <div class="tabs-wrap">
            <div class="tabs-scroll" id="tabsRow">
                @foreach($jobOpenings as $index => $opening)
                <button
                    class="tab-btn bg-white common-shadow-eighteen d-flex fw-medium gap-2 hover-bg-main-600 hover-text-white p-3 text-neutral-500 tw-duration-200 tw-px-405 tw-py-105 tw-rounded-md tw-text-md tw-transition {{ $index === 0 ? 'active' : '' }}"
                    data-form="{{ $opening->slug }}"
                >
                    <span class="tab-icon">{{ $opening->icon }}</span>{{ $opening->title }}
                </button>
                @endforeach
            </div>
        </div>

        <!-- FORM PANELS -->
        @foreach($jobOpenings as $index => $opening)
        <div class="form-panel {{ $index === 0 ? 'active' : '' }}" id="{{ $opening->slug }}">
            <div class="form-top">
                <div>
                    <div class="form-title">{{ $opening->title }}</div>
                    @if($opening->subtitle)
                    <div class="form-subtitle">{{ $opening->subtitle }}</div>
                    @endif
                </div>
                <div class="form-badge">{{ $opening->badge }}</div>
            </div>
            <div class="form-body">
                <form method="POST" action="{{ route('job.apply') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="job_type" value="{{ $opening->slug }}">

                    <div class="section-label">Personal Info</div>
                    <div class="form-grid">
                        <div class="field">
                            <label>Full Name <span>*</span></label>
                            <input type="text" name="name" placeholder="Your full name" required>
                        </div>
                        <div class="field">
                            <label>Email <span>*</span></label>
                            <input type="email" name="email" placeholder="you@example.com" required>
                        </div>
                        <div class="field">
                            <label>Phone</label>
                            <input type="tel" name="phone" placeholder="+91 00000 00000">
                        </div>
                        <div class="field">
                            <label>Experience <span>*</span></label>
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

                    @if(!empty($opening->skills))
                    <div class="section-label">Skills</div>
                    <div class="form-grid" style="margin-bottom:clamp(14px,2vw,24px)">
                        <div class="field full">
                            <label>Select your skills</label>
                            <div class="skills-grid">
                                @foreach($opening->skills as $skill)
                                <label class="skill-chip">
                                    <input type="checkbox" name="skills[]" value="{{ $skill }}">
                                    <span>{{ $skill }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="section-label">Details</div>
                    <div class="form-grid">
                        <div class="field full">
                            <label>Cover Letter</label>
                            <textarea name="cover" placeholder="Tell us why you're perfect for this role…"></textarea>
                        </div>
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
        @endforeach

        @endif

    </div><!-- /page-body -->

    @include('frontend.includes.footers.footerOne')
</div>

<script>
document.getElementById('tabsRow').addEventListener('click', function(e) {
    const btn = e.target.closest('.tab-btn');
    if (!btn) return;
    const target = btn.dataset.form;
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.form-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById(target).classList.add('active');
    btn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

function updateUpload(input) {
    const zone = input.closest('.upload-zone');
    const text = zone.querySelector('.upload-text');
    if (input.files[0]) {
        text.innerHTML = `<strong>Selected:</strong> ${input.files[0].name}`;
    }
}
</script>
<script>
    setTimeout(function() {
        const success = document.querySelector('.alert-success');
        if (success) success.style.display = 'none';
    }, 5000);
</script>

@endsection
