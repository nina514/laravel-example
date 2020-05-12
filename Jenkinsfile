pipeline {
  agent {
    node {
      label 'master'
    }

  }
  stages {
    stage('Source') {
      steps {
        git(branch: 'master', url: 'https://github.com/nina514/laravel-example.git')
      }
    }

    stage('deploy') {
      steps {
        echo 'deploy'
      }
    }

  }
}