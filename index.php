<?php include 'includes/header.php'; ?>

<!-- ── Main Content Area ──────────────────────────────────── -->
<main>

    <!-- ── 1. HERO SECTION ───────────────────────────────────── -->
    <section class="relative pt-20 pb-0 lg:pt-28 overflow-hidden bg-brand-background">
        <!-- Background layers -->
        <div class="absolute inset-0 pointer-events-none -z-10">
            <!-- Noise grain -->
            <div class="absolute inset-0 opacity-[0.018]" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=\'0 0 256 256\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'n\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.75\' numOctaves=\'4\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23n)\'/%3E%3C/svg%3E'); background-repeat: repeat; background-size: 180px 180px;"></div>
            
            <!-- Modern grid pattern -->
            <div class="absolute inset-0 opacity-15" style="background-image: linear-gradient(to right, #2E5BFF 1.5px, transparent 1.5px), linear-gradient(to bottom, #2E5BFF 1.5px, transparent 1.5px); background-size: 48px 48px;"></div>
            
            <!-- Glows -->
            <div class="absolute top-[-20%] left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-brand-primary/8 rounded-full blur-[140px]"></div>
            <div class="absolute top-[30%] left-[-5%] w-[350px] h-[350px] bg-brand-accent/8 rounded-full blur-[100px]"></div>
            <div class="absolute top-[20%] right-[-5%] w-[300px] h-[300px] bg-brand-secondary/6 rounded-full blur-[100px]"></div>
            
            <!-- Bottom fade -->
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-white"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center text-center">

                <!-- Badge -->
                <div data-aos="fade-up" data-aos-delay="0" class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white border border-gray-200/80 shadow-[0_2px_12px_rgba(31,94,107,0.08)] text-sm font-semibold text-gray-600 mb-8 mt-12">
                    <span class="flex items-center justify-center w-5 h-5 rounded-md bg-brand-primary/10">
                        <i data-feather="star" class="text-brand-primary w-3 h-3"></i>
                    </span>
                    <span class="w-px h-4 bg-gray-200"></span>
                    <span>AI-Powered Reputation Management</span>
                </div>

                <!-- Headline -->
                <h1 data-aos="fade-up" data-aos-delay="100" class="text-5xl md:text-6xl lg:text-[5.75rem] font-black tracking-[-0.03em] text-gray-900 mb-6 leading-[1.04]">
                    Turn reviews into<br />
                    <span class="text-gradient">unfair growth</span>
                </h1>

                <!-- Subtitle -->
                <p data-aos="fade-up" data-aos-delay="200" class="text-lg md:text-xl text-gray-500 mb-10 max-w-[480px] leading-relaxed mx-auto">
                    Automate requests, analyze sentiment instantly, and grow your revenue with every 5-star rating.
                </p>

                <!-- CTAs -->
                <div data-aos="fade-up" data-aos-delay="300" class="flex flex-col sm:flex-row gap-3 mb-10 justify-center">
                    <button class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl bg-brand-primary text-white text-base font-bold shadow-[0_4px_20px_rgba(31,94,107,0.30)] hover:bg-brand-secondary transition-colors duration-200 hover:scale-105 active:scale-95 transform">
                        Start for free
                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                    </button>
                    <button class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl bg-white border border-gray-200 text-gray-700 text-base font-semibold shadow-[0_2px_8px_rgba(0,0,0,0.06)] hover:border-gray-300 hover:bg-gray-50 transition-colors duration-200 hover:scale-105 active:scale-95 transform">
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-brand-primary/10">
                            <i data-feather="play" class="text-brand-primary w-2.5 h-2.5 ml-0.5"></i>
                        </span>
                        Watch quick demo
                    </button>
                </div>

                <!-- Social proof -->
                <div data-aos="fade-up" data-aos-delay="400" class="flex items-center justify-center gap-3 mb-16">
                    <div class="flex -space-x-2.5">
                        <img src="https://i.pravatar.cc/80?img=10" alt="User" class="w-8 h-8 rounded-full border-2 border-brand-background object-cover" />
                        <img src="https://i.pravatar.cc/80?img=11" alt="User" class="w-8 h-8 rounded-full border-2 border-brand-background object-cover" />
                        <img src="https://i.pravatar.cc/80?img=12" alt="User" class="w-8 h-8 rounded-full border-2 border-brand-background object-cover" />
                        <img src="https://i.pravatar.cc/80?img=13" alt="User" class="w-8 h-8 rounded-full border-2 border-brand-background object-cover" />
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <div class="flex gap-0.5 text-amber-400">
                            <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                            <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                            <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                            <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                            <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        </div>
                        <span class="text-gray-300">&middot;</span>
                        <span><span class="text-gray-900 font-semibold">500+</span> businesses joined this week</span>
                    </div>
                </div>

                <!-- Dashboard preview -->
                <div data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" class="relative w-full max-w-5xl mx-auto">
                    <!-- Soft teal glow behind frame -->
                    <div class="absolute -inset-4 bg-brand-primary/10 rounded-3xl blur-2xl -z-10"></div>
                    
                    <!-- Browser frame -->
                    <div class="relative rounded-t-2xl overflow-hidden bg-white border border-gray-200/80 shadow-[0_32px_80px_rgba(31,94,107,0.12),0_8px_24px_rgba(0,0,0,0.06)] ring-1 ring-black/[0.04]">
                        
                        <!-- Browser bar -->
                        <div class="h-10 bg-gray-50 border-b border-gray-100 flex items-center px-4 gap-3">
                            <div class="flex gap-1.5">
                                <div class="w-3 h-3 rounded-full bg-[#FF5F56] border border-[#E0443E]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#FFBD2E] border border-[#DEA123]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#27C93F] border border-[#1AAB29]"></div>
                            </div>
                            <div class="flex-1 max-w-[220px] mx-auto">
                                <div class="h-5 bg-white rounded border border-gray-200 flex items-center justify-center">
                                    <span class="text-[10px] text-gray-400 font-medium tracking-wide">app.airatingz.com</span>
                                </div>
                            </div>
                        </div>

                        <!-- Screenshot -->
                        <div class="relative aspect-[16/9] overflow-hidden bg-brand-background">
                            <img src="assets/images/main-dash-ai-ratings-Ciu9-7ur.png" alt="Airatingz Dashboard" class="w-full h-full object-cover object-top" />
                            <div class="absolute bottom-0 left-0 right-0 h-28 bg-gradient-to-t from-white to-transparent"></div>
                        </div>
                    </div>

                    <!-- Floating card — Avg Rating -->
                    <div data-aos="fade-right" data-aos-delay="1000" class="absolute top-14 -left-5 lg:-left-12 bg-white border border-gray-100 rounded-2xl px-4 py-3.5 shadow-[0_16px_40px_rgba(0,0,0,0.10)] hidden md:block">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center ring-1 ring-amber-200/60">
                                <i data-feather="star" class="text-amber-500 w-5 h-5"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-0.5">Avg Rating</p>
                                <p class="text-2xl font-black text-gray-900 leading-none">
                                    4.9 <span class="text-amber-400">&starf;</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating card — New Reviews -->
                    <div data-aos="fade-left" data-aos-delay="1200" class="absolute top-14 -right-5 lg:-right-12 bg-white border border-gray-100 rounded-2xl px-4 py-3.5 shadow-[0_16px_40px_rgba(0,0,0,0.10)] hidden md:block">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center ring-1 ring-emerald-200/60">
                                <i data-feather="trending-up" class="text-emerald-500 w-5 h-5"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-0.5">New Reviews</p>
                                <p class="text-2xl font-black text-gray-900 leading-none">
                                    +247 <span class="text-emerald-500 text-xs font-bold">/ week</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── 2. SOCIAL PROOF ───────────────────────────────────── -->
    <section class="py-8 bg-white border-y border-brand-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-[10px] font-black uppercase tracking-[0.2em] text-brand-muted mb-8">
                Trusted by 5,000+ Category Leaders
            </p>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center justify-items-center opacity-40 grayscale">
                <div class="text-xl font-black tracking-tighter text-brand-text cursor-default">HubSpot</div>
                <div class="text-xl font-black tracking-tighter text-brand-text cursor-default">Shopify</div>
                <div class="text-xl font-black tracking-tighter text-brand-text cursor-default">stripe</div>
                <div class="text-xl font-black tracking-tighter text-brand-text cursor-default">airbnb</div>
                <div class="text-xl font-black tracking-tighter text-brand-text cursor-default">Intercom</div>
                <div class="text-xl font-black tracking-tighter text-brand-text cursor-default">Grammarly</div>
            </div>
            
            <div class="mt-10 flex flex-col sm:flex-row justify-center items-center gap-6">
                <div class="flex items-center gap-3">
                    <div class="flex text-brand-secondary gap-0.5">
                        <svg class="w-4 h-4 fill-current text-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <svg class="w-4 h-4 fill-current text-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <svg class="w-4 h-4 fill-current text-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <svg class="w-4 h-4 fill-current text-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <svg class="w-4 h-4 fill-current text-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                    </div>
                    <span class="font-bold text-brand-text text-sm">4.9/5 Rating</span>
                </div>
                <div class="h-4 w-px bg-brand-border hidden sm:block"></div>
                <div class="text-brand-muted text-xs font-bold">
                    Based on <span class="text-brand-text">1,200+ Verified Reviews</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 3. PLATFORM OVERVIEW ─────────────────────────────────── -->
    <section class="py-12 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="fade-up" class="max-w-3xl mx-auto mb-12">
                <span class="inline-block py-1 px-4 rounded-full bg-brand-primary/10 text-brand-primary text-[10px] font-black tracking-widest uppercase mb-4">
                    Everything you need
                </span>
                <h2 class="text-3xl md:text-5xl font-black text-brand-text mb-6">
                    Your New Review <br /> <span class="text-brand-primary">Management Platform</span>
                </h2>
            </div>
            
            <div data-aos="zoom-in" data-aos-duration="800" class="relative max-w-5xl mx-auto mb-10">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-brand-background">
                    <img src="https://cdn.revw.me/d5774814-80c7-4695-b97a-db81928164c0/images/6o8ilyyJO8weWZ1nPK9SGPB4jXGsJh-metaaW1hZ2UtNS5wbmc=-.png" alt="Dashboard" class="w-full h-auto object-cover" />
                </div>
            </div>

            <div data-aos="fade-up" class="max-w-3xl mx-auto">
                <p class="text-lg md:text-xl text-brand-muted font-medium leading-relaxed">
                    Displaying and requesting reviews for your business has never been easier. Establish trust and boost sales.
                </p>
            </div>
        </div>
    </section>

    <!-- ── 4. FEATURES (BENTO GRID) ──────────────────────────────── -->
    <section id="features" class="py-16 bg-brand-background overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div data-aos="fade-up" class="flex flex-col items-center text-center mb-14">
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white border border-gray-200/80 shadow-[0_2px_10px_rgba(31,94,107,0.07)] text-sm font-semibold text-gray-600 mb-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-primary animate-pulse"></span>
                    Powerful Capabilities
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-[3.5rem] font-black tracking-[-0.03em] text-gray-900 mb-4 leading-[1.06]">
                    Everything you need to<br />
                    <span class="text-gradient">dominate your reputation</span>
                </h2>
                <p class="text-lg text-gray-500 max-w-lg leading-relaxed mix-blend-multiply">
                    Enterprise-grade tools to collect reviews, respond instantly, and turn social proof into revenue.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
                
                <!-- Card 1 -->
                <div data-aos="fade-up" data-aos-delay="0" class="relative overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-[0_2px_16px_rgba(0,0,0,0.05)] hover:shadow-[0_12px_48px_rgba(31,94,107,0.10)] hover:-translate-y-0.5 transition-all duration-300 group lg:col-span-7">
                    <div class="relative h-80 overflow-hidden bg-brand-background border-b border-gray-100">
                        <img src="assets/images/reviews-dashboard-zfra6WVY.png" alt="Reviews Dashboard" class="w-full h-full object-cover object-top group-hover:scale-[1.03] transition-transform duration-700" />
                    </div>
                    <div class="p-6 pt-4 text-left">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 ring-1 ring-blue-200/60 flex items-center justify-center shrink-0">
                                <i data-feather="send" class="text-blue-500 w-5 h-5"></i>
                            </div>
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-1.5">
                                    <h3 class="text-base font-bold text-gray-900">Automated Review Collection</h3>
                                    <span class="px-2 py-0.5 rounded-full bg-blue-50 border border-blue-100 text-[10px] font-bold text-blue-600 tracking-wide">3&times; volume</span>
                                </div>
                                <p class="text-sm text-gray-500 leading-relaxed">
                                    Smart triggers send requests when customers are happiest &mdash; automatically, at exactly the right moment, across every channel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" data-aos-delay="100" class="lg:col-span-5 relative overflow-hidden rounded-2xl bg-gradient-to-br from-brand-primary via-brand-secondary to-brand-accent border border-brand-primary/20 shadow-[0_8px_40px_rgba(31,94,107,0.22)] hover:shadow-[0_16px_64px_rgba(31,94,107,0.30)] hover:-translate-y-0.5 transition-all duration-300 group p-6 flex flex-col justify-between text-left">
                    <div class="absolute -top-10 -right-10 w-48 h-48 bg-white/[0.07] rounded-full blur-2xl pointer-events-none"></div>
                    <div class="absolute bottom-0 -left-6 w-32 h-32 bg-brand-accent/20 rounded-full blur-2xl pointer-events-none"></div>
                    
                    <div class="relative">
                        <div class="w-11 h-11 rounded-xl bg-white/15 backdrop-blur-sm ring-1 ring-white/20 flex items-center justify-center mb-5">
                            <i data-feather="cpu" class="text-white w-5 h-5"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2.5">AI-Powered Response Engine</h3>
                        <p class="text-sm text-white/70 leading-relaxed mb-4">
                            Never leave a customer hanging. Our AI drafts professional, on-brand replies in seconds &mdash; for every single review, on every platform. 
                        </p>
                        <p class="text-sm text-white/70 leading-relaxed">
                            It instantly detects sentiment, translates across 40+ languages, and perfectly mimics your specific brand voice to turn even negative feedback into positive interactions.
                        </p>
                    </div>

                    <div class="relative mt-8 flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 rounded-lg bg-white/12 backdrop-blur-sm border border-white/15 text-[11px] font-semibold text-white/90">&zap; 2.3s avg response</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white/12 backdrop-blur-sm border border-white/15 text-[11px] font-semibold text-white/90">98% satisfaction</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white/12 backdrop-blur-sm border border-white/15 text-[11px] font-semibold text-white/90">All platforms</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white/12 backdrop-blur-sm border border-white/15 text-[11px] font-semibold text-white/90">Custom brand voice</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div data-aos="fade-up" data-aos-delay="200" class="relative overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-[0_2px_16px_rgba(0,0,0,0.05)] hover:shadow-[0_12px_48px_rgba(31,94,107,0.10)] hover:-translate-y-0.5 transition-all duration-300 group lg:col-span-4 text-left">
                    <div class="relative h-64 overflow-hidden bg-brand-background">
                        <img src="assets/images/widget-ai-ratingz-BVIiHIJt.png" alt="Trust Widget" class="w-full h-full object-cover object-top group-hover:scale-[1.04] transition-transform duration-700" />
                    </div>
                    <div class="p-5 pt-3">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-emerald-50 ring-1 ring-emerald-200/60 flex items-center justify-center">
                                <i data-feather="layout" class="text-emerald-500 w-4 h-4"></i>
                            </div>
                            <h3 class="text-sm font-bold text-gray-900">Trust-Building Widgets</h3>
                        </div>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Stunning, customizable review widgets that embed anywhere and convert visitors into buyers.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div data-aos="fade-up" data-aos-delay="300" class="relative overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-[0_2px_16px_rgba(0,0,0,0.05)] hover:shadow-[0_12px_48px_rgba(31,94,107,0.10)] hover:-translate-y-0.5 transition-all duration-300 group lg:col-span-4 text-left">
                    <div class="relative h-64 overflow-hidden bg-brand-background">
                        <img src="assets/images/negative-feedback-BcPHuIER.webp" alt="Feedback Shield" class="w-full h-full object-cover group-hover:scale-[1.04] transition-transform duration-700" />
                    </div>
                    <div class="p-5 pt-3">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-red-50 ring-1 ring-red-200/60 flex items-center justify-center">
                                <i data-feather="shield" class="text-red-500 w-4 h-4"></i>
                            </div>
                            <h3 class="text-sm font-bold text-gray-900">Negative Feedback Shield</h3>
                        </div>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Private funnels resolve issues before they become damaging public complaints &mdash; protecting your reputation.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div data-aos="fade-up" data-aos-delay="400" class="relative overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-[0_2px_16px_rgba(0,0,0,0.05)] hover:shadow-[0_12px_48px_rgba(31,94,107,0.10)] hover:-translate-y-0.5 transition-all duration-300 group lg:col-span-4 text-left">
                    <div class="relative h-64 overflow-hidden bg-brand-background">
                        <img src="assets/images/integrations-Bbki2w6E.png" alt="Integrations" class="w-full h-full object-cover group-hover:scale-[1.04] transition-transform duration-700" />
                    </div>
                    <div class="p-5 pt-3">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-amber-50 ring-1 ring-amber-200/60 flex items-center justify-center">
                                <i data-feather="refresh-cw" class="text-amber-500 w-4 h-4"></i>
                            </div>
                            <h3 class="text-sm font-bold text-gray-900">Omnichannel Monitoring</h3>
                        </div>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Google, Facebook, Yelp, Trustpilot &mdash; manage every review from one beautiful, unified dashboard.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── 5. HOW IT WORKS / PROCESS ────────────────────────────── -->
    <section id="process" class="relative py-28 bg-brand-background overflow-hidden">

        <!-- Ambient glow orbs (very soft on light bg) -->
        <div class="absolute rounded-full pointer-events-none" style="top: 5%; left: -10%; width: 600px; height: 600px; background: rgba(46,91,255,0.05); filter: blur(160px);"></div>
        <div class="absolute rounded-full pointer-events-none" style="bottom: 0%; right: -8%; width: 520px; height: 520px; background: rgba(106,90,205,0.05); filter: blur(150px);"></div>
        <div class="absolute rounded-full pointer-events-none" style="top: 50%; left: 35%; width: 360px; height: 360px; background: rgba(255,122,24,0.03); filter: blur(180px);"></div>

        <!-- Subtle dot grid -->
        <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(46,91,255,0.1) 1px, transparent 1px); background-size: 36px 36px; opacity: 0.35;"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative">

            <!-- ── Section Header ── -->
            <div data-aos="fade-up" class="flex flex-col items-center text-center mb-20">
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white border border-gray-200/80 shadow-sm mb-6">
                    <span class="w-1.5 h-1.5 rounded-full animate-pulse" style="background: #2E5BFF;"></span>
                    <span class="text-[10px] font-black tracking-[0.22em] uppercase text-brand-primary">How It Works</span>
                </div>

                <h2 class="font-black tracking-tight text-gray-900 mb-5" style="font-size: clamp(2.2rem, 5vw, 3.5rem); line-height: 1.06;">
                    Three steps to<br/>
                    <span style="background: linear-gradient(130deg, #2E5BFF 0%, #6A5ACD 50%, #FF7A18 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">unstoppable growth</span>
                </h2>

                <p class="text-base leading-relaxed text-gray-500 max-w-md">
                    From setup to exponential growth — fully automated from day one.
                </p>
            </div>

            <!-- ── Timeline Steps Container ── -->
            <div class="relative">

                <!-- Vertical spine (desktop only) -->
                <div class="hidden md:block absolute top-10 bottom-10 pointer-events-none" style="left: calc(50% - 1px); width: 2px; background: linear-gradient(to bottom, transparent 0%, rgba(46,91,255,0.3) 18%, rgba(106,90,205,0.28) 55%, rgba(255,122,24,0.25) 85%, transparent 100%); z-index: 0;"></div>

                <!-- ══ STEP 1 ══ (card LEFT) -->
                <div class="relative grid grid-cols-1 md:grid-cols-[1fr_76px_1fr] items-center mb-12 md:mb-20">

                    <!-- Card — left column -->
                    <div data-aos="fade-right" data-aos-delay="0" class="md:col-start-1">
                        <div class="relative p-6 lg:p-8 rounded-2xl overflow-hidden group cursor-default bg-white md:mr-7" style="border: 1px solid rgba(226,232,240,0.9); box-shadow: 0 4px 20px rgba(46,91,255,0.06), 0 1px 4px rgba(0,0,0,0.04); transition: box-shadow 0.4s ease, transform 0.4s ease;">
                            <!-- Hover glow -->
                            <div class="absolute inset-0 rounded-2xl transition-opacity duration-500 opacity-0 group-hover:opacity-100 pointer-events-none" style="background: radial-gradient(ellipse at 55% 40%, rgba(46,91,255,0.04), transparent 65%);"></div>
                            <!-- Card top shimmer -->
                            <div class="absolute top-0 left-8 right-8 rounded-full pointer-events-none" style="height: 2px; background: linear-gradient(to right, transparent, rgba(46,91,255,0.55), transparent);"></div>
                            <!-- Watermark number -->
                            <div class="absolute -bottom-2 -right-1 select-none pointer-events-none font-black leading-none" style="font-size: 100px; color: rgba(46,91,255,0.035);">01</div>

                            <div class="relative">
                                <!-- Mobile step indicator -->
                                <div class="flex md:hidden items-center gap-3 mb-5">
                                    <div class="w-9 h-9 rounded-full flex items-center justify-center font-black text-xs shrink-0" style="background: linear-gradient(135deg, #2E5BFF, #6A5ACD); color: white; box-shadow: 0 4px 14px rgba(46,91,255,0.35);">01</div>
                                    <div class="flex-1 h-px bg-gray-200"></div>
                                </div>
                                <!-- Step badge -->
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[9px] font-black tracking-[0.18em] uppercase mb-5" style="background: rgba(46,91,255,0.07); border: 1px solid rgba(46,91,255,0.18); color: #2E5BFF;">
                                    STEP 01
                                </div>
                                <!-- Icon -->
                                <div class="w-11 h-11 rounded-xl flex items-center justify-center mb-5" style="background: linear-gradient(135deg, rgba(46,91,255,0.1), rgba(106,90,205,0.08)); border: 1px solid rgba(46,91,255,0.18); box-shadow: 0 4px 16px rgba(46,91,255,0.12);">
                                    <i data-feather="link-2" style="color: #2E5BFF; width: 18px; height: 18px;"></i>
                                </div>
                                <h3 class="text-lg font-bold mb-2.5 leading-snug text-gray-900">Connect your platforms</h3>
                                <p class="text-sm leading-relaxed mb-5 text-gray-500 font-medium">Link Google Business, Yelp, and 50+ review platforms in under 60 seconds. No code, zero friction.</p>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[11px] font-semibold" style="background: rgba(16,185,129,0.07); border: 1px solid rgba(16,185,129,0.2); color: #059669;">
                                    <svg viewBox="0 0 20 20" fill="currentColor" style="width: 12px; height: 12px; flex-shrink: 0;"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    60-second setup
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Connector dot — center column -->
                    <div class="hidden md:flex md:col-start-2 justify-center items-center" style="position: relative; z-index: 10;">
                        <div class="relative flex items-center justify-center w-[52px] h-[52px] rounded-full font-black text-sm" style="background: linear-gradient(135deg, #2E5BFF, #6A5ACD); color: white; box-shadow: 0 0 0 6px rgba(46,91,255,0.1), 0 6px 24px rgba(46,91,255,0.35);">
                            01
                            <span class="absolute inset-0 rounded-full animate-ping" style="background: rgba(46,91,255,0.25); opacity: 0.3;"></span>
                        </div>
                    </div>

                    <!-- Empty right spacer -->
                    <div class="hidden md:block md:col-start-3"></div>
                </div>

                <!-- ══ STEP 2 ══ (card RIGHT) -->
                <div class="relative grid grid-cols-1 md:grid-cols-[1fr_76px_1fr] items-center mb-12 md:mb-20">

                    <!-- Empty left spacer -->
                    <div class="hidden md:block md:col-start-1"></div>

                    <!-- Connector dot — center column -->
                    <div class="hidden md:flex md:col-start-2 justify-center items-center" style="position: relative; z-index: 10;">
                        <div class="relative flex items-center justify-center w-[52px] h-[52px] rounded-full font-black text-sm" style="background: linear-gradient(135deg, #6A5ACD, #B5649A); color: white; box-shadow: 0 0 0 6px rgba(106,90,205,0.1), 0 6px 24px rgba(106,90,205,0.35);">
                            02
                            <span class="absolute inset-0 rounded-full animate-ping" style="background: rgba(106,90,205,0.28); opacity: 0.28;"></span>
                        </div>
                    </div>

                    <!-- Card — right column -->
                    <div data-aos="fade-left" data-aos-delay="120" class="md:col-start-3">
                        <div class="relative p-6 lg:p-8 rounded-2xl overflow-hidden group cursor-default bg-white md:ml-7" style="border: 1px solid rgba(226,232,240,0.9); box-shadow: 0 4px 20px rgba(106,90,205,0.06), 0 1px 4px rgba(0,0,0,0.04); transition: box-shadow 0.4s ease, transform 0.4s ease;">
                            <div class="absolute inset-0 rounded-2xl transition-opacity duration-500 opacity-0 group-hover:opacity-100 pointer-events-none" style="background: radial-gradient(ellipse at 45% 55%, rgba(106,90,205,0.04), transparent 65%);"></div>
                            <div class="absolute top-0 left-8 right-8 rounded-full pointer-events-none" style="height: 2px; background: linear-gradient(to right, transparent, rgba(106,90,205,0.5), transparent);"></div>
                            <div class="absolute -bottom-2 -left-1 select-none pointer-events-none font-black leading-none" style="font-size: 100px; color: rgba(106,90,205,0.035);">02</div>

                            <div class="relative">
                                <!-- Mobile step indicator -->
                                <div class="flex md:hidden items-center gap-3 mb-5">
                                    <div class="w-9 h-9 rounded-full flex items-center justify-center font-black text-xs shrink-0" style="background: linear-gradient(135deg, #6A5ACD, #B5649A); color: white; box-shadow: 0 4px 14px rgba(106,90,205,0.35);">02</div>
                                    <div class="flex-1 h-px bg-gray-200"></div>
                                </div>
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[9px] font-black tracking-[0.18em] uppercase mb-5" style="background: rgba(106,90,205,0.07); border: 1px solid rgba(106,90,205,0.18); color: #6A5ACD;">
                                    STEP 02
                                </div>
                                <div class="w-11 h-11 rounded-xl flex items-center justify-center mb-5" style="background: linear-gradient(135deg, rgba(106,90,205,0.1), rgba(255,122,24,0.07)); border: 1px solid rgba(106,90,205,0.18); box-shadow: 0 4px 16px rgba(106,90,205,0.12);">
                                    <i data-feather="zap" style="color: #6A5ACD; width: 18px; height: 18px;"></i>
                                </div>
                                <h3 class="text-lg font-bold mb-2.5 leading-snug text-gray-900">Automate review requests</h3>
                                <p class="text-sm leading-relaxed mb-5 text-gray-500 font-medium">Our AI picks the perfect moment and sends personalized requests via email, SMS, and WhatsApp — on full autopilot.</p>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[11px] font-semibold" style="background: rgba(255,122,24,0.07); border: 1px solid rgba(255,122,24,0.2); color: #C2500A;">
                                    <svg viewBox="0 0 20 20" fill="currentColor" style="width: 12px; height: 12px; flex-shrink: 0;"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/></svg>
                                    3&times; more reviews
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ══ STEP 3 ══ (card LEFT) -->
                <div class="relative grid grid-cols-1 md:grid-cols-[1fr_76px_1fr] items-center">

                    <!-- Card — left column -->
                    <div data-aos="fade-right" data-aos-delay="200" class="md:col-start-1">
                        <div class="relative p-6 lg:p-8 rounded-2xl overflow-hidden group cursor-default bg-white md:mr-7" style="border: 1px solid rgba(226,232,240,0.9); box-shadow: 0 4px 20px rgba(251,191,36,0.08), 0 1px 4px rgba(0,0,0,0.04); transition: box-shadow 0.4s ease, transform 0.4s ease;">
                            <div class="absolute inset-0 rounded-2xl transition-opacity duration-500 opacity-0 group-hover:opacity-100 pointer-events-none" style="background: radial-gradient(ellipse at 55% 45%, rgba(251,191,36,0.05), transparent 65%);"></div>
                            <div class="absolute top-0 left-8 right-8 rounded-full pointer-events-none" style="height: 2px; background: linear-gradient(to right, transparent, rgba(251,191,36,0.6), transparent);"></div>
                            <div class="absolute -bottom-2 -right-1 select-none pointer-events-none font-black leading-none" style="font-size: 100px; color: rgba(251,191,36,0.06);">03</div>

                            <div class="relative">
                                <!-- Mobile step indicator -->
                                <div class="flex md:hidden items-center gap-3 mb-5">
                                    <div class="w-9 h-9 rounded-full flex items-center justify-center font-black text-xs shrink-0" style="background: linear-gradient(135deg, #FBBF24, #FF7A18); color: white; box-shadow: 0 4px 14px rgba(251,191,36,0.3);">03</div>
                                    <div class="flex-1 h-px bg-gray-200"></div>
                                </div>
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[9px] font-black tracking-[0.18em] uppercase mb-5" style="background: rgba(251,191,36,0.08); border: 1px solid rgba(251,191,36,0.25); color: #92680A;">
                                    STEP 03
                                </div>
                                <div class="w-11 h-11 rounded-xl flex items-center justify-center mb-5" style="background: linear-gradient(135deg, rgba(251,191,36,0.12), rgba(255,122,24,0.09)); border: 1px solid rgba(251,191,36,0.25); box-shadow: 0 4px 16px rgba(251,191,36,0.14);">
                                    <i data-feather="trending-up" style="color: #D97706; width: 18px; height: 18px;"></i>
                                </div>
                                <h3 class="text-lg font-bold mb-2.5 leading-snug text-gray-900">Monitor &amp; grow revenue</h3>
                                <p class="text-sm leading-relaxed mb-5 text-gray-500 font-medium">Track sentiment in real time, resolve issues privately, and convert social proof into consistent, compounding revenue.</p>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[11px] font-semibold" style="background: rgba(251,191,36,0.08); border: 1px solid rgba(251,191,36,0.22); color: #92680A;">
                                    <svg viewBox="0 0 24 24" fill="currentColor" style="width: 12px; height: 12px; flex-shrink: 0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    98% satisfaction rate
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Connector dot — center column -->
                    <div class="hidden md:flex md:col-start-2 justify-center items-center" style="position: relative; z-index: 10;">
                        <div class="relative flex items-center justify-center w-[52px] h-[52px] rounded-full font-black text-sm" style="background: linear-gradient(135deg, #FBBF24, #FF7A18); color: white; box-shadow: 0 0 0 6px rgba(251,191,36,0.12), 0 6px 24px rgba(251,191,36,0.32);">
                            03
                            <span class="absolute inset-0 rounded-full animate-ping" style="background: rgba(251,191,36,0.35); opacity: 0.25;"></span>
                        </div>
                    </div>

                    <!-- Empty right spacer -->
                    <div class="hidden md:block md:col-start-3"></div>
                </div>

            </div><!-- /steps -->
        </div>
    </section>

    <!-- ── 6. INTEGRATIONS ──────────────────────────────────────── -->
    <section id="integrations" class="py-12 bg-white relative overflow-hidden">

        <?php
        $int_logos = [
            "https://cdn2.revw.me/img/integration-logos/google.svg",
            "https://cdn2.revw.me/img/integration-logos/facebook.svg",
            "https://cdn2.revw.me/img/integration-logos/trustpilot.svg",
            "https://cdn2.revw.me/img/integration-logos/yelp.svg",
            "https://cdn2.revw.me/img/integration-logos/yellowpages.png",
            "https://cdn2.revw.me/img/integration-logos/trip_advisor.png",
            "https://cdn2.revw.me/img/integration-logos/yell_sm.png",
            "https://cdn2.revw.me/img/integration-logos/thumbtack_sm.png",
            "https://cdn2.revw.me/img/integration-logos/zillow_sm.png",
            "https://cdn2.revw.me/img/integration-logos/bbb.svg",
            "https://cdn2.revw.me/img/integration-logos/homeadvisor_sm.png",
            "https://cdn2.revw.me/img/integration-logos/houzz.svg",
            "https://cdn2.revw.me/img/integration-logos/trustedshops_sm.png",
            "https://cdn2.revw.me/img/integration-logos/amazon.svg",
            "https://cdn2.revw.me/img/integration-logos/booking.svg",
            "https://cdn2.revw.me/img/integration-logos/angieslist.png",
            "https://cdn2.revw.me/img/integration-logos/serviceseeking_com_au_sm.png",
            "https://cdn2.revw.me/img/integration-logos/reviews_io_sm.png",
            "https://cdn2.revw.me/img/integration-logos/apple_app_store.svg",
            "https://cdn2.revw.me/img/integration-logos/apple_podcasts.svg",
            "https://cdn2.revw.me/img/integration-logos/trustatrader_sm.png",
            "https://cdn2.revw.me/img/integration-logos/rated_people_sm.png",
            "https://cdn2.revw.me/img/integration-logos/airbnb.svg",
            "https://cdn2.revw.me/img/integration-logos/hotels.svg",
            "https://cdn2.revw.me/img/integration-logos/g2.svg",
            "https://cdn2.revw.me/img/integration-logos/capterra.svg",
            "https://cdn2.revw.me/img/integration-logos/open_table.svg",
            "https://cdn2.revw.me/img/integration-logos/ed_munds.svg",
            "https://cdn2.revw.me/img/integration-logos/checkatrade.png",
            "https://cdn2.revw.me/img/integration-logos/vitals.png",
            "https://cdn2.revw.me/img/integration-logos/webmd.png",
            "https://cdn2.revw.me/img/integration-logos/testimonials.svg",
            "https://cdn2.revw.me/img/integration-logos/just-eat.png",
            "https://cdn2.revw.me/img/integration-logos/hammer.png",
            "https://cdn2.revw.me/img/integration-logos/zocdoc.png",
            "https://cdn2.revw.me/img/integration-logos/vrbo.svg",
            "https://cdn2.revw.me/img/integration-logos/mindbody.png",
            "https://cdn2.revw.me/img/integration-logos/legelisten.avif",
            "https://cdn2.revw.me/img/integration-logos/deliveroo.png",
            "https://cdn2.revw.me/img/integration-logos/agoda.png",
            "https://cdn2.revw.me/img/integration-logos/getagent.png",
            "https://cdn2.revw.me/img/integration-logos/zomato.png",
            "https://cdn2.revw.me/img/integration-logos/doctify.jpeg",
            "https://cdn2.revw.me/img/integration-logos/healthgrades.svg",
            "https://cdn2.revw.me/img/integration-logos/ratemds.png",
            "https://cdn2.revw.me/img/integration-logos/booksy.svg",
            "https://cdn2.revw.me/img/integration-logos/patient_connect.png",
            "https://cdn2.revw.me/img/integration-logos/realself.png",
            "https://cdn2.revw.me/img/integration-logos/rover.png",
            "https://cdn2.revw.me/img/integration-logos/homestars.png",
            "https://cdn2.revw.me/img/integration-logos/repairpal.svg",
            "https://cdn2.revw.me/img/integration-logos/anwalt.png",
            "https://cdn2.revw.me/img/integration-logos/advocado.png",
            "https://cdn2.revw.me/img/integration-logos/kununu.png",
            "https://cdn2.revw.me/img/integration-logos/treatwell.png",
            "https://cdn2.revw.me/img/integration-logos/fresha.png",
            "https://cdn2.revw.me/img/integration-logos/hipages.png",
            "https://cdn2.revw.me/img/integration-logos/jameda.png",
            "https://cdn2.revw.me/img/integration-logos/airtasker.png",
            "https://cdn2.revw.me/img/integration-logos/planity.png",
        ];
        $col0 = array_slice($int_logos, 0, 15);
        $col1 = array_slice($int_logos, 15, 15);
        $col2 = array_slice($int_logos, 30, 15);
        ?>

        <style>
            @keyframes int-scroll-down {
                0%   { transform: translateY(0); }
                100% { transform: translateY(-50%); }
            }
            @keyframes int-scroll-up {
                0%   { transform: translateY(-50%); }
                100% { transform: translateY(0); }
            }
            .int-col-down { animation: int-scroll-down 40s linear infinite; }
            .int-col-up   { animation: int-scroll-up   40s linear infinite; }
        </style>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div id="int-layout" class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center transition-all duration-500">

                <!-- ── Left: text + toggle ── -->
                <div data-aos="fade-right" data-aos-once="true" class="text-left w-full">
                    <h2 class="text-3xl md:text-5xl font-black text-brand-text mb-6 leading-tight">
                        Seamless integrations <br/>
                        <span class="text-brand-primary">modern webhooks</span>
                    </h2>

                    <p class="text-lg text-brand-muted font-medium mb-8 leading-relaxed max-w-lg">
                        Whatever you're using to manage your GTM motion, we integrate with it.
                    </p>

                    <div class="relative w-full">
                        <!-- Toggle button -->
                        <button id="int-btn" onclick="toggleIntegrations()" class="inline-flex items-center gap-2 text-brand-primary font-bold text-lg hover:gap-3 transition-all group" style="background: none; border: none; cursor: pointer; padding: 0;">
                            <span id="int-btn-label">See all integrations</span>
                            <!-- Arrow right -->
                            <svg id="int-icon-arrow" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                            </svg>
                            <!-- Chevron up (hidden) -->
                            <svg id="int-icon-up" class="w-5 h-5 transition-transform duration-300 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="18 15 12 9 6 15"/>
                            </svg>
                        </button>

                        <!-- Expanded all-logos grid (hidden by default) -->
                        <div id="int-all-grid" class="hidden mt-6 overflow-hidden bg-brand-background/50 rounded-2xl border border-brand-border p-6 w-full">
                            <div class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 gap-4">
                                <?php foreach ($int_logos as $logo): ?>
                                <div class="bg-white rounded-lg border border-brand-border/50 p-2 flex items-center justify-center aspect-square hover:border-brand-primary/30 transition-all shadow-sm">
                                    <img src="<?= htmlspecialchars($logo) ?>" alt="Integration" class="w-full h-full object-contain p-1" loading="lazy" />
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ── Right: scrolling logo columns ── -->
                <div id="int-scroll-cols" data-aos="fade-left" class="relative h-[450px] w-full flex items-center justify-center overflow-hidden">
                    <!-- Fade masks -->
                    <div class="absolute top-0 left-0 right-0 h-20 bg-gradient-to-b from-white to-transparent z-10 pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-white to-transparent z-10 pointer-events-none"></div>

                    <!-- 3 columns rotated -->
                    <div class="grid grid-cols-3 gap-6 w-full max-w-md mx-auto transform -rotate-6 scale-100 opacity-80">

                        <!-- Column 0: scroll down -->
                        <div class="flex flex-col gap-6 int-col-down">
                            <?php foreach (array_merge($col0, $col0) as $logo): ?>
                            <div class="bg-white rounded-xl shadow-sm border border-brand-border/40 p-3 flex items-center justify-center aspect-square w-20 h-20 mx-auto transition-transform hover:scale-110">
                                <img src="<?= htmlspecialchars($logo) ?>" alt="Integration" class="w-full h-full object-contain p-1" loading="lazy" />
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Column 1: scroll up -->
                        <div class="flex flex-col gap-6 int-col-up">
                            <?php foreach (array_merge($col1, $col1) as $logo): ?>
                            <div class="bg-white rounded-xl shadow-sm border border-brand-border/40 p-3 flex items-center justify-center aspect-square w-20 h-20 mx-auto transition-transform hover:scale-110">
                                <img src="<?= htmlspecialchars($logo) ?>" alt="Integration" class="w-full h-full object-contain p-1" loading="lazy" />
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Column 2: scroll down -->
                        <div class="flex flex-col gap-6 int-col-down">
                            <?php foreach (array_merge($col2, $col2) as $logo): ?>
                            <div class="bg-white rounded-xl shadow-sm border border-brand-border/40 p-3 flex items-center justify-center aspect-square w-20 h-20 mx-auto transition-transform hover:scale-110">
                                <img src="<?= htmlspecialchars($logo) ?>" alt="Integration" class="w-full h-full object-contain p-1" loading="lazy" />
                            </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <script>
        function toggleIntegrations() {
            var allGrid   = document.getElementById('int-all-grid');
            var scrollCols= document.getElementById('int-scroll-cols');
            var layout    = document.getElementById('int-layout');
            var label     = document.getElementById('int-btn-label');
            var arrow     = document.getElementById('int-icon-arrow');
            var chevron   = document.getElementById('int-icon-up');
            var expanded  = !allGrid.classList.contains('hidden');

            if (expanded) {
                allGrid.classList.add('hidden');
                scrollCols.classList.remove('hidden');
                layout.style.gridTemplateColumns = '';
                label.textContent = 'See all integrations';
                arrow.classList.remove('hidden');
                chevron.classList.add('hidden');
            } else {
                allGrid.classList.remove('hidden');
                scrollCols.classList.add('hidden');
                layout.style.gridTemplateColumns = '1fr';
                label.textContent = 'Hide integrations';
                arrow.classList.add('hidden');
                chevron.classList.remove('hidden');
            }
        }
        </script>

    </section>

    <!-- ── 7. PRICING ───────────────────────────────────────────── -->
    <section id="pricing" class="py-12 bg-brand-background relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div data-aos="fade-up" class="text-center mb-12">
                <span class="text-brand-secondary font-black tracking-[0.2em] uppercase text-[10px] mb-3 block">Pricing Plans</span>
                <h2 class="text-3xl md:text-5xl font-black text-brand-text mb-4">Choose your growth speed</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Plan 1 -->
                <div data-aos="fade-up" data-aos-delay="0" class="relative p-6 rounded-xl border flex flex-col h-full bg-white transition-all duration-300 border-brand-border shadow-sm">
                    <div class="mb-6">
                        <h3 class="text-lg font-black text-brand-text mb-1">Starter Spark</h3>
                        <div class="flex items-baseline gap-1 mb-2">
                            <span class="text-3xl font-black text-brand-primary">₹999</span>
                            <span class="text-brand-muted font-bold text-xs">/mo</span>
                        </div>
                        <p class="text-xs text-brand-muted font-bold leading-relaxed">Perfect for local businesses.</p>
                    </div>
                    <div class="space-y-3 mb-8 flex-grow">
                        <div class="flex items-center gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 250 invites
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 2 team seats
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> Basic analytics
                        </div>
                    </div>
                    <button class="w-full py-3 inline-flex items-center justify-center gap-1.5 text-sm rounded-xl font-bold bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors">Start Free Trial <i data-feather="arrow-right" class="w-3.5 h-3.5"></i></button>
                </div>

                <!-- Plan 2 (Popular) -->
                <div data-aos="fade-up" data-aos-delay="100" class="relative p-6 rounded-xl border flex flex-col h-full bg-white transition-all duration-300 border-brand-primary shadow-premium ring-4 ring-brand-primary/5 z-10">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-brand-primary text-white text-[9px] font-black tracking-widest px-4 py-1 rounded-full uppercase">Most Popular</div>
                    <div class="mb-6">
                        <h3 class="text-lg font-black text-brand-text mb-1">Growth Gravity</h3>
                        <div class="flex items-baseline gap-1 mb-2">
                            <span class="text-3xl font-black text-brand-primary">₹1,999</span>
                            <span class="text-brand-muted font-bold text-xs">/mo</span>
                        </div>
                        <p class="text-xs text-brand-muted font-bold leading-relaxed">Our most popular scaling plan.</p>
                    </div>
                    <div class="space-y-3 mb-8 flex-grow">
                        <div class="flex items-center gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 1000 invites
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 5 team seats
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> Priority support
                        </div>
                    </div>
                    <button class="w-full py-3 inline-flex items-center justify-center gap-1.5 text-sm rounded-xl font-bold bg-brand-primary text-white hover:bg-brand-secondary transition-colors shadow-md">Start Free Trial <i data-feather="arrow-right" class="w-3.5 h-3.5"></i></button>
                </div>

                <!-- Plan 3 -->
                <div data-aos="fade-up" data-aos-delay="200" class="relative p-6 rounded-xl border flex flex-col h-full bg-white transition-all duration-300 border-brand-border shadow-sm">
                    <div class="mb-6">
                        <h3 class="text-lg font-black text-brand-text mb-1">Pro Pulse</h3>
                        <div class="flex items-baseline gap-1 mb-2">
                            <span class="text-3xl font-black text-brand-primary">₹2,999</span>
                            <span class="text-brand-muted font-bold text-xs">/mo</span>
                        </div>
                        <p class="text-xs text-brand-muted font-bold leading-relaxed">Advanced features for brands.</p>
                    </div>
                    <div class="space-y-3 mb-8 flex-grow">
                        <div class="flex items-center gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 2500 invites
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 10 team seats
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> AI responses
                        </div>
                    </div>
                    <button class="w-full py-3 inline-flex items-center justify-center gap-1.5 text-sm rounded-xl font-bold bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors">Start Free Trial <i data-feather="arrow-right" class="w-3.5 h-3.5"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 8. FAQ SECTION ───────────────────────────────────────── -->
    <section id="faq" class="py-24 bg-brand-background relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-primary/[0.03] blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-accent/[0.03] blur-[120px] rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20">
                
                <!-- ── Left Column: Intro ── -->
                <div class="lg:col-span-5 lg:sticky lg:top-32 self-start" data-aos="fade-right">
                    <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white border border-gray-200/80 shadow-sm text-sm font-semibold text-gray-600 mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Got Questions?
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 leading-tight tracking-tight">
                        Frequently asked <br/>
                        <span class="text-brand-primary">Questions</span>
                    </h2>
                    
                    <p class="text-lg text-gray-500 font-medium mb-8 leading-relaxed max-w-md">
                        Everything you need to know about the product and how it handles your reputation management on autopilot.
                    </p>
                    
                    <div class="p-6 bg-white rounded-2xl border border-gray-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-full bg-brand-primary/10 flex items-center justify-center shrink-0">
                                <i data-feather="message-circle" class="text-brand-primary w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Still have questions?</h4>
                                <p class="text-sm text-gray-500">We're here to help you.</p>
                            </div>
                        </div>
                        <a href="mailto:support@airatingz.com" class="inline-flex w-full items-center justify-center gap-2 px-6 py-3 rounded-xl bg-gray-50 hover:bg-gray-100 border border-gray-200 text-gray-900 font-semibold transition-colors duration-200">
                            Contact Support
                            <i data-feather="arrow-right" class="w-4 h-4 text-gray-500"></i>
                        </a>
                    </div>
                </div>

                <!-- ── Right Column: Accordion ── -->
                <div class="lg:col-span-7" data-aos="fade-left" data-aos-delay="100">
                    <div class="space-y-4">
                        
                        <?php
                        $faqs = [
                            [
                                "q" => "How does the automated review collection work?",
                                "a" => "Airatingz seamlessly integrates with your existing CRM or POS system. Once a customer completes a transaction or interaction, our system automatically sequences an intelligent review request via SMS or Email at the optimal time to maximize conversion."
                            ],
                            [
                                "q" => "Is there a limit to how many review requests I can send?",
                                "a" => "Our limits depend on your pricing tier. The Starter Spark plan includes 250 invites per month, while higher tiers like Growth Gravity offer 1000 invites. Enterprise plans offer custom limits to suit massive operational scale."
                            ],
                            [
                                "q" => "How does the Negative Feedback Shield actually protect me?",
                                "a" => "When a customer initiates a rating of 3 stars or below on our custom review funnels, we intercept the flow. Instead of sending them to Google or Yelp, we route them to a private internal feedback form. This allows you to resolve the grievance privately before it becomes a public complaint."
                            ],
                            [
                                "q" => "Which platforms do you integrate with?",
                                "a" => "We support over 50+ integrations, including Google Business Profile, Facebook, Yelp, Trustpilot, TripAdvisor, and industry-specific platforms like Healthgrades, Zillow, and Avvo. If you need a specific webhook, our API covers it."
                            ],
                            [
                                "q" => "Can I customize the review request templates?",
                                "a" => "Absolutely. You have full control over the branding, copy, timing, and channels (SMS vs. Email) of your outgoing review requests to ensure they perfectly match your brand's tone of voice."
                            ]
                        ];
                        
                        foreach ($faqs as $index => $faq):
                            // First item is open by default
                            $isOpen = ($index === 0);
                        ?>
                        
                        <!-- Accordion Item -->
                        <div class="faq-item group transition-all duration-300" data-open="<?php echo $isOpen ? 'true' : 'false'; ?>">
                            <button class="faq-button w-full flex items-center justify-between py-6 border-b border-gray-300 border-dotted text-left focus:outline-none" aria-expanded="<?php echo $isOpen ? 'true' : 'false'; ?>">
                                <span class="text-base md:text-lg font-bold pr-8 text-gray-900 group-hover:text-brand-primary transition-colors duration-200">
                                    <?php echo $faq['q']; ?>
                                </span>
                                <div class="w-8 h-8 flex items-center justify-center shrink-0 text-gray-400 group-hover:text-brand-primary transition-colors duration-300">
                                    <i data-feather="<?php echo $isOpen ? 'minus' : 'plus'; ?>" class="faq-icon w-5 h-5 transition-transform duration-300 <?php echo $isOpen ? 'rotate-180' : ''; ?>"></i>
                                </div>
                            </button>
                            
                            <div class="faq-content transition-all duration-500 ease-in-out <?php echo $isOpen ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'; ?>" style="display: grid;">
                                <div class="faq-inner-content overflow-hidden">
                                    <div class="pt-6 pb-2 pr-6 md:pr-12 text-sm leading-relaxed text-gray-600 font-medium">
                                        <?php echo $faq['a']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php endforeach; ?>
                        
                    </div>
                </div>

            </div>
        </div>

        <!-- FAQ Interactivity Script -->
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const button = item.querySelector('.faq-button');
                const content = item.querySelector('.faq-content');
                
                button.addEventListener('click', () => {
                    const isOpen = item.getAttribute('data-open') === 'true';
                    
                    // Close all other items (optional: remove this block if you want multiple open at once)
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.getAttribute('data-open') === 'true') {
                            otherItem.setAttribute('data-open', 'false');
                            
                            const otherButton = otherItem.querySelector('.faq-button');
                            const otherContent = otherItem.querySelector('.faq-content');
                            
                            otherButton.setAttribute('aria-expanded', 'false');
                            otherContent.classList.remove('grid-rows-[1fr]', 'opacity-100');
                            otherContent.classList.add('grid-rows-[0fr]', 'opacity-0');
                            
                            const otherIcon = otherItem.querySelector('.faq-icon');
                            if (otherIcon) {
                                otherIcon.outerHTML = '<i data-feather="plus" class="faq-icon w-5 h-5 transition-transform duration-300"></i>';
                            }
                        }
                    });
                    
                    // Re-query the icon for the *current* item because Feather Replaces the DOM node during outerHTML swaps
                    let currentIcon = item.querySelector('.faq-icon');
                    
                    // Toggle current item
                    if (isOpen) {
                        // Close it
                        item.setAttribute('data-open', 'false');
                        button.setAttribute('aria-expanded', 'false');
                        content.classList.remove('grid-rows-[1fr]', 'opacity-100');
                        content.classList.add('grid-rows-[0fr]', 'opacity-0');
                        
                        if (currentIcon) {
                            currentIcon.outerHTML = '<i data-feather="plus" class="faq-icon w-5 h-5 transition-transform duration-300"></i>';
                        }
                    } else {
                        // Open it
                        item.setAttribute('data-open', 'true');
                        button.setAttribute('aria-expanded', 'true');
                        content.classList.remove('grid-rows-[0fr]', 'opacity-0');
                        content.classList.add('grid-rows-[1fr]', 'opacity-100');
                        
                        if (currentIcon) {
                            currentIcon.outerHTML = '<i data-feather="minus" class="faq-icon w-5 h-5 transition-transform duration-300"></i>';
                        }
                    }
                    
                    // Re-render new icons
                    if (window.feather) {
                        feather.replace();
                    }
                });
            });
        });
        </script>
    </section>

    <!-- ── 9. FINAL CTA ─────────────────────────────────────────── -->
    <section class="py-16 relative overflow-hidden bg-gradient-to-br from-brand-primary to-brand-secondary text-white">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-[-20%] left-[-10%] w-[600px] h-[600px] bg-white/10 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-[-20%] right-[-10%] w-[600px] h-[600px] bg-brand-accent/20 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
            <h2 data-aos="fade-up" class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight tracking-tight">
                Ready to <span class="text-white drop-shadow-md">dominate</span> <br class="hidden md:block" /> your local market?
            </h2>
            <p data-aos="fade-up" data-aos-delay="100" class="text-lg md:text-xl text-white/90 mb-10 max-w-2xl mx-auto font-medium leading-relaxed">
                Join the 500+ businesses using Airatingz to turn reviews into revenue. Start your 14-day free trial today.
            </p>
            
            <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <button class="group relative px-8 py-4 bg-white text-brand-primary font-bold text-lg rounded-xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.2)] hover:shadow-[0_20px_60px_-15px_rgba(0,0,0,0.3)] transition-all duration-300 hover:-translate-y-1">
                    <span class="flex items-center justify-center gap-2">
                        Start Free Trial
                        <i data-feather="arrow-right" class="transition-transform group-hover:translate-x-1 w-5 h-5"></i>
                    </span>
                </button>
                <button class="px-8 py-4 bg-transparent border border-white/30 text-white font-bold text-lg rounded-xl hover:bg-white/10 hover:border-white/50 transition-all duration-300">
                    Book a Demo
                </button>
            </div>

            <div data-aos="fade-up" data-aos-delay="400" class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-8 text-sm font-medium text-white/90">
                <span class="flex items-center justify-center gap-2"><i data-feather="check" class="text-brand-accent w-4 h-4"></i> No credit card required</span>
                <span class="flex items-center justify-center gap-2"><i data-feather="check" class="text-brand-accent w-4 h-4"></i> 14-day free trial</span>
                <span class="flex items-center justify-center gap-2"><i data-feather="check" class="text-brand-accent w-4 h-4"></i> Cancel anytime</span>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
