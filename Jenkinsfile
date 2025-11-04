pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                echo 'stage running'
                git branch: 'master', url: '.'
            }
        }
        
        stage('Build') {
            steps {
                echo 'stage running'
                sh 'echo "Building the application"'
            }
        }
        
        stage('Test') {
            steps {
                echo 'stage running'
                sh 'echo "Running tests"'
            }
        }
        
        stage('Deploy') {
            steps {
                echo 'stage running'
                sh 'echo "Deploying the application"'
            }
        }
        
        stage('Verify') {
            steps {
                echo 'stage running'
                sh 'echo "Verifying deployment"'
            }
        }
    }
    
    post {
        success {
            echo 'Pipeline completed successfully'
        }
        failure {
            echo 'Pipeline failed'
        }
    }
}