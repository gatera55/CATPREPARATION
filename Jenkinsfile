pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                echo 'Checkout stage running'
                // Use remote Git URL instead of local path
                git branch: 'master', url: 'https://github.com/gatera55/CATPREPARATION.git'
            }
        }

        stage('Build') {
            steps {
                echo 'Build stage running'
                sh 'echo "Building the application"'
            }
        }

        stage('Test') {
            steps {
                echo 'Test stage running'
                sh 'echo "Running tests"'
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deploy stage running'
                sh 'echo "Deploying the application"'
            }
        }

        stage('Verify') {
            steps {
                echo 'Verify stage running'
                sh 'echo "Verifying deployment"'
            }
        }
    }

    post {
        success {
            echo '✅ Pipeline completed successfully'
        }
        failure {
            echo '❌ Pipeline failed'
        }
    }
}