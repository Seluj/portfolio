<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/svg+xml" href="assets/img/vite.svg"/>
    <meta name="google-site-verification" content="qDKB2ei3_8JhsxrarHHWDW6jAzgNLag5ksAmdAWFFwE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php
    $seo = [
            'title' => 'Jules Ferlin - Ingénieur Informatique',
            'path' => '/'
    ];
    include 'assets/partials/seo.php';
    ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPTDG3KP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Navigation -->
<nav class="navbar">
    <div class="container">
        <div class="nav-brand">JF</div>
        <ul class="nav-menu">
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#apropos">À Propos</a></li>
            <li><a href="#competences">Compétences</a></li>
            <li><a href="#experiences">Expériences</a></li>
            <li><a href="#projets">Projets</a></li>
            <li><a href="#formation">Formation</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <button class="nav-toggle" id="navToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>

<!-- Hero Section -->
<section id="accueil" class="hero">
    <div class="hero-background"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Jules Ferlin</h1>
                <h2 class="hero-subtitle">Ingénieur en Informatique (UTBM 2025) et Étudiant en Master ETI</h2>
                <p class="hero-description">Passionné par l'informatique, l'innovation et la modélisation 3D, je suis
                    actuellement en alternance en Master Entrepreneuriat Technologique et Innovation.</p>
                <div class="hero-buttons">
                    <a href="#projets" class="btn btn-primary">Découvrir mes projets</a>
                    <a href="#contact" class="btn btn-secondary">Me contacter</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="profile-picture">
                    <img src="assets/img/profile.jpeg"
                         onerror="this.onerror=null;this.src='https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=600';"
                         alt="Jules Ferlin">
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <a href="#apropos"><i class="fas fa-chevron-down"></i></a>
    </div>
</section>

<!-- À Propos Section -->
<section id="apropos" class="section section-alt">
    <div class="container">
        <h2 class="section-title">Profil</h2>
        <div class="about-content">
            <div class="about-text">
                <p>À 23 ans, je suis un ingénieur diplômé de l'Université de Technologie de Belfort Montbéliard,
                    spécialisé en informatique. Je complète actuellement mon cursus par un Master Entrepreneuriat,
                    Technologique et Innovation. Je suis reconnu pour ma capacité à prendre des initiatives et mon
                    leadership. Je suis passionné par les nouvelles technologies, le développement et les réalisations
                    3D.</p>
            </div>
            <div class="about-info">
                <div class="info-item">
                    <i class="fas fa-birthday-cake"></i>
                    <span>23 ans</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Saint Quentin en Yvelines, France</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:jules.ferlin@gmail.com">jules.ferlin@gmail.com</a>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+33781136262">07 81 13 62 62</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compétences Section -->
<section id="competences" class="section">
    <div class="container">
        <h2 class="section-title">Mes Compétences</h2>
        <div class="skills-grid">
            <div class="skill-category">
                <div class="skill-icon"><i class="fas fa-code"></i></div>
                <h3>Programmation</h3>
                <ul>
                    <li>C/C++</li>
                    <li>Java, Kotlin</li>
                    <li>C#/.NET</li>
                </ul>
            </div>
            <div class="skill-category">
                <div class="skill-icon"><i class="fas fa-globe"></i></div>
                <h3>Web & Backend</h3>
                <ul>
                    <li>Angular, HTML, CSS</li>
                    <li>Spring Boot (APIs REST)</li>
                    <li>Node / JavaScript</li>
                </ul>
            </div>
            <div class="skill-category">
                <div class="skill-icon"><i class="fas fa-desktop"></i></div>
                <h3>DevOps & Tests</h3>
                <ul>
                    <li>Git, CI/CD basics, Docker</li>
                    <li>PowerShell, SQL, UiPath (tests fonctionnels)</li>
                </ul>
            </div>
            <div class="skill-category">
                <div class="skill-icon"><i class="fas fa-mobile-alt"></i></div>
                <h3>Développement Mobile</h3>
                <ul>
                    <li>Flutter (Provider, architecture MVVM, widgets custom)</li>
                    <li>Conception d'UI réactives & tests</li>
                </ul>
            </div>
            <div class="skill-category">
                <div class="skill-icon"><i class="fas fa-vial"></i></div>
                <h3>3D & Fabrication</h3>
                <ul>
                    <li>Modélisation & impression 3D (création de pièces pour Lusim / Nexsim)</li>
                    <li>Intégration hardware-software pour prototypes pédagogiques</li>
                </ul>
            </div>
            <div class="skill-category">
                <div class="skill-icon"><i class="fas fa-tools"></i></div>
                <h3>Outils & Méthodes</h3>
                <ul>
                    <li>JetBrains, Visual Studio</li>
                    <li>UML & SysML</li>
                    <li>Git</li>
                    <li>Microsoft Office</li>
                </ul>
            </div>
            <div class="skill-category">
                <div class="skill-icon"><i class="fas fa-language"></i></div>
                <h3>Langues</h3>
                <ul>
                    <li>Anglais (B2)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Expériences Section -->
<section id="experiences" class="section section-alt">
    <div class="container">
        <h2 class="section-title">Mon Parcours Professionnel</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-date">Septembre 2025 - Aujourd'hui</span>
                    <h3>Alternance</h3>
                    <h4>Isara Technologie</h4>
                    <p>Développement technique et commercial de solutions logicielles, en lien avec le Master ETI</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-date">Février 2025 - Juillet 2025</span>
                    <h3>Chef de projet / Développeur</h3>
                    <h4>Hôpital Nord Franche-Comté</h4>
                    <p>Étude, conception et déploiement d'une application patient/soignant (mobile & web). Backend Spring Boot, frontend mobile en Flutter.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-date">Septembre 2023 - Février 2024</span>
                    <h3>Assistant Ingénieur</h3>
                    <h4>Version.NET</h4>
                    <p>Développement de tests unitaires (PowerShell, SQL) et fonctionnels (UiPath). Montée de version de
                        .NET Framework à .NET 8 d'une application lourde.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-date">Décembre 2022 - Aujourd'hui</span>
                    <h3>Responsable Informatique Associatif</h3>
                    <h4>Bureau des Sports — UTBM</h4>
                    <p>Développement d'outils pour la gestion des adhésions (bot Discord, export CSV pour Yapla) et formation des prochains responsables. <br><a href="https://yapla.selutech.fr" target="_blank">Exportateur CSV pour Yapla</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projets Section -->
<section id="projets" class="section">
    <div class="container">
        <h2 class="section-title">Projets et Réalisations</h2>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-header">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Projet Nexsim</h3>
                <p>Collaboration avec Lusim sur un simulateur et des modules pédagogiques. Responsable des modèles 3D, impressions, et du développement de l'application mobile (Flutter) de contrôle.</p>
                <p>Stack : Flutter, modélisation 3D, impressions FDM.</p>
                <a href="http://nexsim.selutech.fr" target="_blank" class="project-link">
                    nexsim.selutech.fr <i class="fas fa-external-link-alt"></i>
                </a>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Lusim (Lung Simulation)</h3>
                <p>Dispositif pédagogique de formation à la ventilation mécanique : développement matériel et logiciel, scénarios de formation et interface de contrôle.</p>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3>Responsable Informatique Associatif</h3>
                <p>Bot Discord pour gestion d'adhésions, outils d'export et processus d'onboarding pour le BDS de l'UTBM.</p>
            </div>
        </div>
    </div>
</section>

<!-- Formation Section -->
<section id="formation" class="section section-alt">
    <div class="container">
        <h2 class="section-title">Ma Formation</h2>
        <div class="education-grid">
            <div class="education-card">
                <div class="education-year">2025 - Aujourd'hui</div>
                <h3>Master Entreprenariat, Technologie et Innovation</h3>
                <p class="education-school"><i class="fas fa-university"></i> Université de technologie de Belfort
                    Montbéliard</p>
            </div>
            <div class="education-card">
                <div class="education-year">2020 - 2025</div>
                <h3>Diplôme d'ingénieur — Informatique</h3>
                <p class="education-subtitle">Spécialité développement</p>
                <p class="education-school"><i class="fas fa-university"></i> Université de technologie de Belfort
                    Montbéliard</p>
            </div>
            <div class="education-card">
                <div class="education-year">Février - Juin 2022</div>
                <h3>Semestre d'études à l'étranger</h3>
                <p class="education-school"><i class="fas fa-university"></i> International School of Sarajevo</p>
            </div>
            <div class="education-card">
                <div class="education-year">2020</div>
                <h3>Baccalauréat Scientifique</h3>
                <p class="education-subtitle">Mention Très Bien</p>
                <p class="education-school"><i class="fas fa-university"></i> Lycée Général de Villaroy</p>
            </div>
        </div>
    </div>
</section>

<!-- Centres d'Intérêt Section -->
<section id="interets" class="section">
    <div class="container">
        <h2 class="section-title">En dehors du code</h2>
        <div class="interests-grid">
            <div class="interest-item">
                <i class="fas fa-biking"></i>
                <span>VTT</span>
            </div>
            <div class="interest-item">
                <i class="fas fa-skiing"></i>
                <span>Ski</span>
            </div>
            <div class="interest-item">
                <i class="fas fa-hiking"></i>
                <span>Randonnées pédestres</span>
            </div>
            <div class="interest-item">
                <i class="fas fa-cube"></i>
                <span>Modélisation & impressions 3D</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section section-alt">
    <div class="container">
        <h2 class="section-title">Contactez-moi</h2>
        <p class="contact-intro">Intéressé par mon profil pour une collaboration ou un projet ? N'hésitez pas à me
            contacter.</p>
        <div class="contact-wrapper">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <a href="mailto:jules.ferlin@gmail.com">jules.ferlin@gmail.com</a>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Téléphone</h4>
                        <a href="tel:+33781136262">07 81 13 62 62</a>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Localisation</h4>
                        <p>Saint-Quentin-en-Yvelines, France</p>
                    </div>
                </div>
            </div>
            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer le message</button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2025 Jules Ferlin. Tous droits réservés.</p>
        <div class="footer-links">
            <a href="mailto:jules.ferlin@gmail.com"><i class="fas fa-envelope"></i></a>
            <a href="tel:+33781136262"><i class="fas fa-phone"></i></a>
            <a href="https://github.com/Seluj" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/jules-ferlin-0865b6122/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</footer>

<script type="module" src="assets/js/main.js"></script>
</body>
</html>
