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
                        <p class="text-sm text-white/70 leading-relaxed">
                            Never leave a customer hanging. Our AI drafts professional, on-brand replies in seconds &mdash; for every single review, on every platform.
                        </p>
                    </div>

                    <div class="relative mt-8 flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 rounded-lg bg-white/12 backdrop-blur-sm border border-white/15 text-[11px] font-semibold text-white/90">&zap; 2.3s avg response</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white/12 backdrop-blur-sm border border-white/15 text-[11px] font-semibold text-white/90">98% satisfaction</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white/12 backdrop-blur-sm border border-white/15 text-[11px] font-semibold text-white/90">All platforms</span>
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
    <section id="process" class="relative py-24 bg-brand-background overflow-hidden z-0">
        <!-- Background Atmosphere -->
        <div class="absolute inset-0 pointer-events-none -z-10">
            <div class="absolute top-[20%] left-[-10%] w-[500px] h-[500px] bg-brand-primary/5 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-brand-accent/5 rounded-full blur-[140px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div data-aos="fade-up" class="flex flex-col items-center text-center mb-24">
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white/80 backdrop-blur-md border border-gray-200/60 shadow-sm text-sm font-semibold text-gray-600 mb-6">
                    <span class="flex items-center justify-center w-5 h-5 rounded-md bg-brand-primary/10">
                        <i data-feather="grid" class="text-brand-primary w-3 h-3"></i>
                    </span>
                    <span class="w-px h-4 bg-gray-200"></span>
                    <span>Process</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-6 tracking-tight">
                    How it <span class="text-gradient">works</span>
                </h2>
                <p class="text-lg md:text-xl text-gray-500 max-w-2xl">
                    From setup to exponential growth in three simple, automated steps.
                </p>
            </div>

            <div class="relative">
                <!-- Connector Line -->
                <div class="hidden md:block absolute top-[88px] left-[15%] right-[15%] h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent -z-10"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                    
                    <!-- Step 1 -->
                    <div data-aos="fade-up" data-aos-delay="0" class="relative flex flex-col items-center text-center group">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 text-[120px] font-black text-gray-900/[0.02] select-none -z-10 transition-colors duration-500 group-hover:text-brand-primary/[0.04]">01</div>
                        <div class="w-full bg-white/60 backdrop-blur-xl border border-white/80 rounded-3xl p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] ring-1 ring-gray-900/5 transition-all duration-500 ease-out group-hover:-translate-y-2 group-hover:shadow-[0_20px_40px_rgb(46,91,255,0.08)] group-hover:border-white group-hover:bg-white text-center">
                            <div class="w-16 h-16 mx-auto rounded-2xl bg-white border border-gray-100 shadow-md flex items-center justify-center mb-8 relative z-10 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3">
                                <div class="absolute inset-0 rounded-2xl bg-brand-primary/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                                <i data-feather="link-2" class="text-brand-primary w-6 h-6 z-10 relative"></i>
                            </div>
                            <div class="relative z-10">
                                <div class="inline-flex items-center justify-center px-3 h-8 rounded-full bg-gray-50 border border-gray-100 text-xs font-bold text-gray-400 mb-4 tracking-wider transition-colors duration-300 group-hover:bg-brand-primary/5 group-hover:text-brand-primary group-hover:border-brand-primary/20">
                                    STEP 1
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-4 tracking-tight group-hover:text-brand-primary transition-colors duration-300">Connect your platforms</h3>
                                <p class="text-base text-gray-500 leading-relaxed font-medium">Link your Google Business, Yelp, and other review platforms in under 60 seconds. Zero friction.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div data-aos="fade-up" data-aos-delay="150" class="relative flex flex-col items-center text-center group">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 text-[120px] font-black text-gray-900/[0.02] select-none -z-10 transition-colors duration-500 group-hover:text-brand-primary/[0.04]">02</div>
                        <div class="w-full bg-white/60 backdrop-blur-xl border border-white/80 rounded-3xl p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] ring-1 ring-gray-900/5 transition-all duration-500 ease-out group-hover:-translate-y-2 group-hover:shadow-[0_20px_40px_rgb(46,91,255,0.08)] group-hover:border-white group-hover:bg-white text-center">
                            <div class="w-16 h-16 mx-auto rounded-2xl bg-white border border-gray-100 shadow-md flex items-center justify-center mb-8 relative z-10 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3">
                                <div class="absolute inset-0 rounded-2xl bg-brand-primary/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                                <i data-feather="zap" class="text-brand-primary w-6 h-6 z-10 relative"></i>
                            </div>
                            <div class="relative z-10">
                                <div class="inline-flex items-center justify-center px-3 h-8 rounded-full bg-gray-50 border border-gray-100 text-xs font-bold text-gray-400 mb-4 tracking-wider transition-colors duration-300 group-hover:bg-brand-primary/5 group-hover:text-brand-primary group-hover:border-brand-primary/20">
                                    STEP 2
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-4 tracking-tight group-hover:text-brand-primary transition-colors duration-300">Automate review requests</h3>
                                <p class="text-base text-gray-500 leading-relaxed font-medium">Our AI detects the perfect moment to ask customers for feedback and sends personalized requests.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div data-aos="fade-up" data-aos-delay="300" class="relative flex flex-col items-center text-center group">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 text-[120px] font-black text-gray-900/[0.02] select-none -z-10 transition-colors duration-500 group-hover:text-brand-primary/[0.04]">03</div>
                        <div class="w-full bg-white/60 backdrop-blur-xl border border-white/80 rounded-3xl p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] ring-1 ring-gray-900/5 transition-all duration-500 ease-out group-hover:-translate-y-2 group-hover:shadow-[0_20px_40px_rgb(46,91,255,0.08)] group-hover:border-white group-hover:bg-white text-center">
                            <div class="w-16 h-16 mx-auto rounded-2xl bg-white border border-gray-100 shadow-md flex items-center justify-center mb-8 relative z-10 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3">
                                <div class="absolute inset-0 rounded-2xl bg-brand-primary/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                                <i data-feather="trending-up" class="text-brand-primary w-6 h-6 z-10 relative"></i>
                            </div>
                            <div class="relative z-10">
                                <div class="inline-flex items-center justify-center px-3 h-8 rounded-full bg-gray-50 border border-gray-100 text-xs font-bold text-gray-400 mb-4 tracking-wider transition-colors duration-300 group-hover:bg-brand-primary/5 group-hover:text-brand-primary group-hover:border-brand-primary/20">
                                    STEP 3
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-4 tracking-tight group-hover:text-brand-primary transition-colors duration-300">Monitor & grow revenue</h3>
                                <p class="text-base text-gray-500 leading-relaxed font-medium">Track sentiment in real time, resolve issues privately, and convert social proof into sales.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ── 6. PRICING ───────────────────────────────────────────── -->
    <section id="pricing" class="py-12 bg-brand-background relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div data-aos="fade-up" class="text-center mb-12">
                <span class="text-brand-secondary font-black tracking-[0.2em] uppercase text-[10px] mb-3 block">Pricing Plans</span>
                <h2 class="text-3xl md:text-5xl font-black text-brand-text mb-4">Choose your growth speed</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Plan 1 -->
                <div data-aos="fade-up" data-aos-delay="0" class="relative p-6 rounded-xl border flex flex-col h-full bg-white transition-all duration-300 border-brand-border shadow-sm text-center md:text-left">
                    <div class="mb-6">
                        <h3 class="text-lg font-black text-brand-text mb-1">Starter Spark</h3>
                        <div class="flex items-baseline justify-center md:justify-start gap-1 mb-2">
                            <span class="text-3xl font-black text-brand-primary">₹999</span>
                            <span class="text-brand-muted font-bold text-xs">/mo</span>
                        </div>
                        <p class="text-xs text-brand-muted font-bold leading-relaxed">Perfect for local businesses.</p>
                    </div>
                    <div class="space-y-3 mb-8 flex-grow">
                        <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 250 invites
                        </div>
                        <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 2 team seats
                        </div>
                        <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> Basic analytics
                        </div>
                    </div>
                    <button class="w-full py-3 text-sm rounded-xl font-bold bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors">Start Free Trial</button>
                </div>

                <!-- Plan 2 (Popular) -->
                <div data-aos="fade-up" data-aos-delay="100" class="relative p-6 rounded-xl border flex flex-col h-full bg-white transition-all duration-300 border-brand-primary shadow-premium ring-4 ring-brand-primary/5 z-10 text-center md:text-left">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-brand-primary text-white text-[9px] font-black tracking-widest px-4 py-1 rounded-full uppercase">Most Popular</div>
                    <div class="mb-6">
                        <h3 class="text-lg font-black text-brand-text mb-1">Growth Gravity</h3>
                        <div class="flex items-baseline justify-center md:justify-start gap-1 mb-2">
                            <span class="text-3xl font-black text-brand-primary">₹1,999</span>
                            <span class="text-brand-muted font-bold text-xs">/mo</span>
                        </div>
                        <p class="text-xs text-brand-muted font-bold leading-relaxed">Our most popular scaling plan.</p>
                    </div>
                    <div class="space-y-3 mb-8 flex-grow">
                        <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 1000 invites
                        </div>
                        <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 5 team seats
                        </div>
                        <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> Priority support
                        </div>
                    </div>
                    <button class="w-full py-3 text-sm rounded-xl font-bold bg-brand-primary text-white hover:bg-brand-secondary transition-colors shadow-md">Start Free Trial <i data-feather="arrow-right" class="inline w-3 h-3 ml-1"></i></button>
                </div>

                <!-- Plan 3 -->
                <div data-aos="fade-up" data-aos-delay="200" class="relative p-6 rounded-xl border flex flex-col h-full bg-white transition-all duration-300 border-brand-border shadow-sm text-center md:text-left">
                    <div class="mb-6">
                        <h3 class="text-lg font-black text-brand-text mb-1">Pro Pulse</h3>
                        <div class="flex items-baseline justify-center md:justify-start gap-1 mb-2">
                            <span class="text-3xl font-black text-brand-primary">₹2,999</span>
                            <span class="text-brand-muted font-bold text-xs">/mo</span>
                        </div>
                        <p class="text-xs text-brand-muted font-bold leading-relaxed">Advanced features for brands.</p>
                    </div>
                    <div class="space-y-3 mb-8 flex-grow">
                        <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 2500 invites
                        </div>
                        <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> 10 team seats
                        </div>
                        <div class="flex items-center justify-center md:justify-start gap-2 text-xs font-bold text-brand-text">
                            <i data-feather="check" class="text-brand-primary w-4 h-4"></i> AI responses
                        </div>
                    </div>
                    <button class="w-full py-3 text-sm rounded-xl font-bold bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors">Start Free Trial</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 7. FINAL CTA ─────────────────────────────────────────── -->
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

            <div data-aos="fade-up" data-aos-delay="400" class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-8 text-sm font-medium text-white/60">
                <span class="flex items-center justify-center gap-2"><i data-feather="check" class="text-brand-accent w-4 h-4"></i> No credit card required</span>
                <span class="flex items-center justify-center gap-2"><i data-feather="check" class="text-brand-accent w-4 h-4"></i> 14-day free trial</span>
                <span class="flex items-center justify-center gap-2"><i data-feather="check" class="text-brand-accent w-4 h-4"></i> Cancel anytime</span>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
