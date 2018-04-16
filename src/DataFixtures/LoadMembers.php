<?php
namespace App\DataFixtures;
use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Loads the members to the database
 * Class LoadMembers
 * @package App\DataFixtures
 */
class LoadMembers extends Fixture
{

    /**
     * Encoder for the user passwords
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    /**
     * LoadMembers constructor.
     * @param UserPasswordEncoderInterface $encoder
     */
    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    /**
     * Loads the members
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $memberTom = $this->createMember('tom', 'tompass', ['ROLE_MEMBER']);
        $memberSarah = $this->createMember('sarah', 'sarahpass', ['ROLE_MEMBER']);
        $memberEoghan = $this->createMember('eoghan', 'eoghanpass', ['ROLE_SUPER_ADMIN']);
        $memberEddy = $this->createMember('eddy', 'eddypass', ['ROLE_MEMBER']);
        $memberJohn = $this->createMember('john', 'johnpass', ['ROLE_MEMBER']);

        $manager->persist($memberTom);
        $manager->persist($memberSarah);
        $manager->persist($memberEoghan);
        $manager->persist($memberEddy);
        $manager->persist($memberJohn);

        $manager->flush();
    }

    /**
     * Method to create the members
     * @param $username
     * @param $plainPassword
     * @param array $roles
     * @return Member
     */
    private function createMember($username, $plainPassword, $roles = ['ROLE_USER']):Member {
        $member = new Member();
        $member->setUsername($username);
        $member->setRoles($roles);

        // password and encoding
        $encodedPassword = $this->encodePassword($member, $plainPassword);
        $member->setPassword($encodedPassword);

        return $member;
    }

    /**
     * Method to encode the passwords
     * @param $member
     * @param $plainPassword
     * @return string
     */
    private function encodePassword($member, $plainPassword):string {
        $encodedPassword = $this->encoder->encodePassword($member, $plainPassword);
        return $encodedPassword;
    }
}