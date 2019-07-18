<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\User;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender')
            ->add('firstName')
            ->add('lastName')
            ->add('adress')
            ->add('country')
            ->add('nationality')
            ->add('passport')
            ->add('curriculum')
            ->add('picture')
            ->add('availability')
            ->add('birthDate')
            ->add('birthLocation')
            ->add('experience')
            ->add('description')
            ->add('notes')
            ->add('files')
            ->add('user', EntityType::class, [
                'class'         =>  User::class,
                'choice_label'  =>  'username',
            ])
            // ->add('category')
            // ->add('offer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
