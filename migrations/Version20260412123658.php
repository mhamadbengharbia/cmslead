<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260412123658 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE landing_page (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(191) NOT NULL, title VARCHAR(255) NOT NULL, subtitle LONGTEXT DEFAULT NULL, cta_text VARCHAR(255) NOT NULL, hero_image VARCHAR(255) DEFAULT NULL, primary_color VARCHAR(20) DEFAULT NULL, secondary_color VARCHAR(20) DEFAULT NULL, button_color VARCHAR(20) DEFAULT NULL, form_title VARCHAR(255) DEFAULT NULL, success_message LONGTEXT DEFAULT NULL, is_active TINYINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, partner_id INT NOT NULL, landing_template_id INT NOT NULL, INDEX IDX_87A7C8999393F8FE (partner_id), INDEX IDX_87A7C899A65D7C17 (landing_template_id), UNIQUE INDEX uniq_partner_landing_slug (partner_id, slug), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE landing_page_section (id INT AUTO_INCREMENT NOT NULL, section_key VARCHAR(100) NOT NULL, is_enabled TINYINT NOT NULL, content_json JSON DEFAULT NULL, sort_order INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, landing_page_id INT NOT NULL, INDEX IDX_91D9A870DF122DC5 (landing_page_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE landing_template (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(100) NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, preview_image VARCHAR(255) DEFAULT NULL, is_active TINYINT NOT NULL, UNIQUE INDEX uniq_landing_template_code (code), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `lead` (id INT AUTO_INCREMENT NOT NULL, full_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(50) DEFAULT NULL, company VARCHAR(255) DEFAULT NULL, message LONGTEXT DEFAULT NULL, utm_source VARCHAR(255) DEFAULT NULL, utm_medium VARCHAR(255) DEFAULT NULL, utm_campaign VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, partner_id INT NOT NULL, landing_page_id INT NOT NULL, INDEX IDX_289161CB9393F8FE (partner_id), INDEX IDX_289161CBDF122DC5 (landing_page_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partner (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(191) NOT NULL, is_active TINYINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, user_id INT NOT NULL, UNIQUE INDEX UNIQ_312B3E16A76ED395 (user_id), UNIQUE INDEX uniq_partner_slug (slug), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_active TINYINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE landing_page ADD CONSTRAINT FK_87A7C8999393F8FE FOREIGN KEY (partner_id) REFERENCES partner (id)');
        $this->addSql('ALTER TABLE landing_page ADD CONSTRAINT FK_87A7C899A65D7C17 FOREIGN KEY (landing_template_id) REFERENCES landing_template (id)');
        $this->addSql('ALTER TABLE landing_page_section ADD CONSTRAINT FK_91D9A870DF122DC5 FOREIGN KEY (landing_page_id) REFERENCES landing_page (id)');
        $this->addSql('ALTER TABLE `lead` ADD CONSTRAINT FK_289161CB9393F8FE FOREIGN KEY (partner_id) REFERENCES partner (id)');
        $this->addSql('ALTER TABLE `lead` ADD CONSTRAINT FK_289161CBDF122DC5 FOREIGN KEY (landing_page_id) REFERENCES landing_page (id)');
        $this->addSql('ALTER TABLE partner ADD CONSTRAINT FK_312B3E16A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE landing_page DROP FOREIGN KEY FK_87A7C8999393F8FE');
        $this->addSql('ALTER TABLE landing_page DROP FOREIGN KEY FK_87A7C899A65D7C17');
        $this->addSql('ALTER TABLE landing_page_section DROP FOREIGN KEY FK_91D9A870DF122DC5');
        $this->addSql('ALTER TABLE `lead` DROP FOREIGN KEY FK_289161CB9393F8FE');
        $this->addSql('ALTER TABLE `lead` DROP FOREIGN KEY FK_289161CBDF122DC5');
        $this->addSql('ALTER TABLE partner DROP FOREIGN KEY FK_312B3E16A76ED395');
        $this->addSql('DROP TABLE landing_page');
        $this->addSql('DROP TABLE landing_page_section');
        $this->addSql('DROP TABLE landing_template');
        $this->addSql('DROP TABLE `lead`');
        $this->addSql('DROP TABLE partner');
        $this->addSql('DROP TABLE user');
    }
}
