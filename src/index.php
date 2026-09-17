<?php
// Âge calculé à partir de la date de naissance : évite une valeur en dur à maintenir.
$age = (new DateTimeImmutable('2002-02-15'))->diff(new DateTimeImmutable('now'))->y;
?>
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

    <script src="assets/js/main.js"></script>
    <?php
    $seo = [
            'title' => 'Jules Ferlin - Ingénieur Informatique & Président de NexSIM',
            'description' => "Portfolio de Jules Ferlin, ingénieur en informatique diplômé de l'UTBM, titulaire du Master Entrepreneuriat Technologique et Innovation et président de NexSIM, startup de simulation médicale basée à Belfort.",
            'image' => 'assets/img/profile.jpeg',
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
                <h2 class="hero-subtitle">Ingénieur en Informatique (UTBM) &amp; Président de NexSIM</h2>
                <p class="hero-description">Diplômé ingénieur de l'UTBM en 2025 et titulaire du Master Entrepreneuriat
                    Technologique et Innovation en 2026, je dirige aujourd'hui NexSIM, une startup de simulation
                    médicale née de la rencontre entre l'UTBM et l'Hôpital Nord Franche-Comté.</p>
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
                <p>À <?php echo $age; ?> ans, je suis ingénieur diplômé de l'Université de Technologie de Belfort
                    Montbéliard, spécialisé en informatique, et titulaire du Master Entrepreneuriat, Technologie et
                    Innovation de la même école.</p>
                <p>Je suis aujourd'hui président de NexSIM, société par actions simplifiée basée à Belfort qui conçoit
                    LuSIM, un poumon pédagogique hybride destiné à la formation à la ventilation mécanique. Au
                    quotidien, je fais le lien entre la technique — développement mobile, modélisation et impression
                    3D — et le pilotage d'une équipe pluridisciplinaire réunissant ingénieurs et soignants.</p>
                <p>Je suis reconnu pour ma capacité à prendre des initiatives et mon leadership, et je reste passionné
                    par les nouvelles technologies, le développement et les réalisations 3D.</p>
            </div>
            <div class="about-info">
                <div class="info-item">
                    <i class="fas fa-birthday-cake"></i>
                    <span><?php echo $age; ?> ans</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Belfort, France</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-briefcase"></i>
                    <a href="https://www.nexsim.fr" target="_blank" rel="noopener">Président de NexSIM</a>
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
                    <li>Node / TypeScript</li>
                    <li>PHP</li>
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
                <div class="skill-icon"><i class="fas fa-rocket"></i></div>
                <h3>Entrepreneuriat & Direction</h3>
                <ul>
                    <li>Direction d'une SAS (NexSIM)</li>
                    <li>Pilotage d'une équipe pluridisciplinaire</li>
                    <li>Stratégie produit & relations partenaires</li>
                    <li>Recherche de financements (Bpifrance, investisseurs régionaux)</li>
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
                    <span class="timeline-date">2026 - Aujourd'hui</span>
                    <h3>Président</h3>
                    <h4>NexSIM — Belfort</h4>
                    <p>Direction de la startup de simulation médicale issue de la collaboration entre l'UTBM et
                        l'Hôpital Nord Franche-Comté : stratégie, produit, financement et développement technique.
                        Je pilote une équipe pluridisciplinaire (ingénieurs, médecin anesthésiste-réanimateur,
                        expert en ventilation, enseignant-chercheur IA/VR) autour de LuSIM, le poumon pédagogique
                        hybride, et je développe NexControl, l'application mobile Flutter de pilotage du simulateur.
                        <br>Lauréat du Prix 2026 des Entrep' Franche-Comté.
                        <br><a href="https://www.nexsim.fr" target="_blank" rel="noopener">www.nexsim.fr</a></p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-date">Septembre 2025 - Août 2026</span>
                    <h3>Alternance — Ingénieur étude et développement</h3>
                    <h4>Isara Technologie</h4>
                    <p>Développement technique et commercial de solutions logicielles, en alternance dans le cadre du
                        Master Entrepreneuriat Technologique et Innovation.</p>
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
                    <span class="timeline-date">Depuis décembre 2022</span>
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
                    <i class="fas fa-lungs"></i>
                </div>
                <h3>LuSIM — le poumon pédagogique</h3>
                <p>Simulateur hybride de formation à la ventilation mécanique : trois modules mécaniques réglables
                    (compliance, résistance, trigger) qui reproduisent les principales pathologies respiratoires
                    (SDRA, BPCO, asthme), pour former soignants et étudiants sans aucun risque patient.</p>
                <p>Mon rôle : direction du projet, modélisation et impression 3D des pièces, intégration
                    matériel / logiciel.</p>
                <a href="https://www.nexsim.fr" target="_blank" rel="noopener" class="project-link">
                    www.nexsim.fr <i class="fas fa-external-link-alt"></i>
                </a>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>NexControl</h3>
                <p>Application mobile de pilotage de LuSIM : réglage sans fil des paramètres du simulateur,
                    bibliothèque de pathologies préconfigurées et gestion des scénarios de formation en temps réel.</p>
                <p>Stack : Flutter (Provider, architecture MVVM), communication sans fil avec le simulateur.</p>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <i class="fas fa-notes-medical"></i>
                </div>
                <h3>Application patient / soignant — HNFC</h3>
                <p>Étude, conception et déploiement d'une application mobile et web pour l'Hôpital Nord Franche-Comté,
                    en tant que chef de projet et développeur.</p>
                <p>Stack : Spring Boot (APIs REST), Flutter.</p>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3>Outils associatifs — BDS UTBM</h3>
                <p>Bot Discord de gestion des adhésions, exportateur CSV vers Yapla et processus d'onboarding des
                    prochains responsables informatiques.</p>
                <a href="https://yapla.selutech.fr" target="_blank" rel="noopener" class="project-link">
                    yapla.selutech.fr <i class="fas fa-external-link-alt"></i>
                </a>
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
                <div class="education-year">2025 - 2026</div>
                <h3>Master Entrepreneuriat, Technologie et Innovation</h3>
                <p class="education-subtitle">Obtenu — réalisé en alternance</p>
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
        <p>&copy; <?php echo date('Y'); ?> Jules Ferlin. Tous droits réservés.</p>
        <div class="footer-links">
            <a href="mailto:jules.ferlin@gmail.com"><i class="fas fa-envelope"></i></a>
            <a href="tel:+33781136262"><i class="fas fa-phone"></i></a>
            <a href="https://github.com/Seluj" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/jules-ferlin-0865b6122/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.nexsim.fr" target="_blank" rel="noopener" title="NexSIM"><i class="fas fa-lungs"></i></a>
        </div>
    </div>
</footer>
</body>
</html>
